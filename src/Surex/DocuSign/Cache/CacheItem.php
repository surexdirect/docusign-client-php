<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Cache;

use Psr\Cache\CacheItemInterface;

/**
 * Class CacheItem.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class CacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var \DateTime
     */
    private $expiration;

    /**
     * @var bool
     */
    private $isHit = false;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return $this->isHit() ? $this->value : null;
    }

    /**
     * {@inheritdoc}
     */
    public function isHit()
    {
        if (!$this->isHit) {
            return false;
        }

        if (null === $this->expiration) {
            return true;
        }

        return new \DateTime() < $this->expiration;
    }

    /**
     * {@inheritdoc}
     */
    public function set($value)
    {
        $this->isHit = true;
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function expiresAt($expiration)
    {
        if ($this->isValidExpiration($expiration)) {
            $this->expiration = $expiration;

            return $this;
        }

        $implementationMessage = interface_exists('DateTimeInterface')
            ? 'implement interface DateTimeInterface'
            : 'be an instance of DateTime';

        $error = sprintf(
            'Argument 1 passed to %s::expiresAt() must %s, %s given',
            get_class($this),
            $implementationMessage,
            gettype($expiration)
        );

        throw new \TypeError($error);
    }

    /**
     * {@inheritdoc}
     */
    public function expiresAfter($time)
    {
        if (is_int($time)) {
            $this->expiration = new \DateTime("now + $time seconds");
        } elseif ($time instanceof \DateInterval) {
            $this->expiration = (new \DateTime())->add($time);
        } elseif (null === $time) {
            $this->expiration = $time;
        } else {
            $message = 'Argument 1 passed to %s::expiresAfter() must be an '.
                'instance of DateInterval or of the type integer, %s given';
            $error = sprintf($message, get_class($this), gettype($time));

            throw new \TypeError($error);
        }

        return $this;
    }

    /**
     * Determines if an expiration is valid based on the rules defined by PSR6.
     *
     * @param mixed $expiration
     *
     * @return bool
     */
    private function isValidExpiration($expiration)
    {
        if (null === $expiration) {
            return true;
        }

        if ($expiration instanceof \DateTimeInterface) {
            return true;
        }

        return false;
    }
}
