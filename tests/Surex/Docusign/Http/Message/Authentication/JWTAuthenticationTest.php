<?php

namespace Surex\Tests\DocuSign\Http\Message\Authentication;

use Psr\Http\Message\RequestInterface;
use Surex\DocuSign\Authentication\Token;
use Surex\DocuSign\Authentication\TokenFetcher;
use Surex\DocuSign\Http\Message\Authentication\JWTAuthentication;
use PHPUnit\Framework\TestCase;

class JWTAuthenticationTest extends TestCase
{
    public function testAddAuthHeader()
    {
        $token = new Token(['access_token' => '123xyz']);
        $tokenFetcher = $this->createTokenFetcher($token);
        $jwtAuth = new JWTAuthentication($tokenFetcher);
        $request = $this->createMock(RequestInterface::class);
        $request->expects($this->once())
            ->method('withHeader')
            ->with($this->equalTo('Authorization'), $this->equalTo('Bearer 123xyz'))
        ;
        $jwtAuth->authenticate($request);
    }

    protected function createTokenFetcher($token = null)
    {
        $mock = $this
            ->createMock(TokenFetcher::class)
        ;
        $mock
            ->expects($this->once())->method('fetchAccessToken')
            ->willReturn($token)
        ;
        return $mock;
    }
}
