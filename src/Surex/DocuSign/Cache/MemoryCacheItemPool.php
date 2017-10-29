<?php

namespace Surex\DocuSign\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Class MemoryCacheItemPool.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class MemoryCacheItemPool implements CacheItemPoolInterface
{
    /**
     * @var CacheItemInterface[]
     */
    private $items;

    /**
     * @var CacheItemInterface[]
     */
    private $deferredItems;

    /**
     * {@inheritdoc}
     */
    public function getItem($key)
    {
        return current($this->getItems([$key]));
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array $keys = [])
    {
        $items = [];

        foreach ($keys as $key) {
            $items[$key] = $this->hasItem($key) ? clone $this->items[$key] : new CacheItem($key);
        }

        return $items;
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem($key)
    {
        $this->isValidKey($key);

        return isset($this->items[$key]) && $this->items[$key]->isHit();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->items = [];
        $this->deferredItems = [];

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem($key)
    {
        return $this->deleteItems([$key]);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array $keys)
    {
        array_walk($keys, [$this, 'isValidKey']);

        foreach ($keys as $key) {
            unset($this->items[$key]);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface $item)
    {
        $this->items[$item->getKey()] = $item;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface $item)
    {
        $this->deferredItems[$item->getKey()] = $item;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        foreach ($this->deferredItems as $item) {
            $this->save($item);
        }

        $this->deferredItems = [];

        return true;
    }

    /**
     * Determines if the provided key is valid.
     *
     * @param string $key
     * @return bool
     * @throws \InvalidArgumentException
     */
    private function isValidKey($key)
    {
        $invalidCharacters = '{}()/\\\\@:';

        if (!is_string($key) || preg_match("#[$invalidCharacters]#", $key)) {
            throw new \InvalidArgumentException('The provided key is not valid: ' . var_export($key, true));
        }

        return true;
    }
}
