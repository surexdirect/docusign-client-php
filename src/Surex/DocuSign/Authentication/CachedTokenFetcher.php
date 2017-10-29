<?php

namespace Surex\DocuSign\Authentication;

use Psr\Cache\CacheItemPoolInterface;
use Surex\DocuSign\User\DocuSignUser;

/**
 * Class CachedTokenFetcher.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class CachedTokenFetcher implements TokenFetcher
{
    private $cache;
    private $delegate;
    private $docusignUser;
    private $lifetime;
    private $cachePrefix;

    /**
     * CachedTokenFetcher constructor.
     * @param CacheItemPoolInterface $cache
     * @param TokenFetcher $delegate
     * @param DocuSignUser $docusignUser
     * @param int $lifetime
     * @param string $cachePrefix
     */
    public function __construct(
        CacheItemPoolInterface $cache,
        TokenFetcher $delegate,
        DocuSignUser $docusignUser,
        $lifetime = 2280,
        $cachePrefix = 'docusign_cache'
    ) {
        $this->cache = $cache;
        $this->delegate = $delegate;
        $this->docusignUser = $docusignUser;
        $this->lifetime = $lifetime;
        $this->cachePrefix = $cachePrefix;
    }

    public function setDocusignUser(DocuSignUser $user)
    {
        $this->docusignUser = $user;
    }

    /**
     * @return Token
     */
    public function fetchAccessToken()
    {
        $cacheKey = $this->getCacheKey($this->docusignUser->getUserId());
        $item = $this->cache->getItem($cacheKey);

        if ($item->isHit()) {
            return $item->get();
        }

        $token = $this->delegate->fetchAccessToken();
        $validTime = $token->getExpires() - time();
        $expireTtl = $validTime > $this->lifetime ? $this->lifetime : $validTime;
        $item->set($token)->expiresAfter($expireTtl);

        $this->cache->save($item);

        return $token;
    }

    private function getCacheKey($key)
    {
        $key = $this->cachePrefix.$key;

        // ensure we do not have illegal characters
        $key = preg_replace('|[^a-zA-Z0-9_\.!]|', '', $key);

        if (strlen($key) > 64) {
            $key = substr(hash('sha256', $key), 0, 64);
        }

        return $key;
    }
}
