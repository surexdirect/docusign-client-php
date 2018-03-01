<?php

namespace Surex\Tests\DocuSign\Authentication\JWTGenerator;

use Surex\DocuSign\Authentication\Token;

/**
 * @group unit
 */
class TokenTest extends \PHPUnit\Framework\TestCase
{
    public function testToken()
    {
        $options = [
            'access_token' => '123xyz',
            'refresh_token' => '456pdq',
            'expires_in' => 3600,
            'foo' => 'bar'
        ];

        $token = new Token($options);
        $this->assertFalse($token->hasExpired());
        $this->assertEquals('123xyz', $token->getToken());
        $this->assertEquals('456pdq', $token->getRefreshToken());
        $this->assertGreaterThan(time(), $token->getExpires());
        $this->assertEquals(['foo' => 'bar'], $token->getValues());

        $encoded = json_encode($token);
        $decoded = json_decode($encoded, true);
        $token2 = new Token($decoded);

        $this->assertJsonStringEqualsJsonString($encoded, json_encode($token2));
    }

    /**
     * @expectedException \LogicException
     */
    public function testConstructionFail()
    {
        $token = new Token([]);
    }
}
