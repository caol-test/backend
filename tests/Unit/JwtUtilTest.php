<?php

namespace Tests\Unit;

use App\Utils\JWTUtil;
use PHPUnit\Framework\TestCase;

class JwtUtilTest extends TestCase
{
    private const DUMMY_STRING = 'dummy_string';

    public function test_expired_jwt_decodes_to_null()
    {
        $jwt = JWTUtil::encodeJWT(['exp' => time() - 60]);
        $decoded = JWTUtil::decodeJWT($jwt);

        self::assertNull($decoded);
    }

    public function test_valid_jwt_gets_correctly_decoded()
    {
        $jwt = JWTUtil::encodeJWT(['dummy' => self::DUMMY_STRING, 'exp' => time() + 60]);
        $decoded = JWTUtil::decodeJWT($jwt);

        self::assertEquals(self::DUMMY_STRING, $decoded->dummy);
    }
}
