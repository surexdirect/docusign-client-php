<?php

namespace Surex\DocuSign\Authentication;

use Surex\DocuSign\User\DocuSignUser;

/**
 * Interface TokenFetcher.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
interface TokenFetcher
{
    /**
     * @param DocuSignUser $user
     */
    public function setDocusignUser(DocuSignUser $user);

    /**
     * @return Token|null
     */
    public function fetchAccessToken();
}
