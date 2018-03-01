<?php

namespace Surex\DocuSign\Authentication;

/**
 * Interface TokenFetcher.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
interface TokenFetcher
{
    /**
     * @return Token
     */
    public function fetchAccessToken(): Token;
}
