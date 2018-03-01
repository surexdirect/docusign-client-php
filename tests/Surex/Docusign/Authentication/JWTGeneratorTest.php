<?php

namespace Surex\Tests\DocuSign\Authentication\JWTGenerator;

use Firebase\JWT\JWT;
use Surex\DocuSign\Authentication\JWTGenerator;

/**
 * @group unit
 */
class JWTGeneratorTest extends \PHPUnit\Framework\TestCase
{
    public function testJWTGenerator()
    {
        $privateKey = file_get_contents(__DIR__.'/../../../fixtures/jwtRS256.key');
        $pubKey = file_get_contents(__DIR__.'/../../../fixtures/jwtRS256.key.pub');
        $generator = new JWTGenerator($privateKey, '1234', 'https://account-d.docusign.com');
        $result = $generator->generate('12345');

        $decoded = JWT::decode($result, $pubKey, ['RS256']);

        $this->assertEquals('1234', $decoded->iss);
        $this->assertEquals('12345', $decoded->sub);
        $this->assertEquals('https://account-d.docusign.com', $decoded->aud);
        $this->assertEquals('signature impersonation', $decoded->scope);
    }
}
