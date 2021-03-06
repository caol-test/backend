<?php

namespace App\Utils;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use stdClass;

class JWTUtil
{
    public static function encodeJWT($payload): ?string
    {
        try {
            return JWT::encode($payload, self::getKey(), 'HS256');
        } catch (Exception $exc) {
            return null;
        }
    }

    public static function decodeJWT(string $jwt): ?stdClass
    {
        try {
            $key = new Key(self::getKey(), 'HS256');
            $payload = JWT::decode($jwt, $key);

            return ($payload->exp > time()) ? $payload : null;
        } catch (Exception $exc) {
            return null;
        }
    }

    private static function getKey(): string {
        return env('JWT_KEY', 'key');
    }
}
