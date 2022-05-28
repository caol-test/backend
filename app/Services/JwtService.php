<?php

namespace App\Services;

use App\Repositories\JwtRepository;
use App\Utils\JWTUtil;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

class JwtService
{
    private JwtRepository $jwtRepository;

    public function __construct(JwtRepository $jwtRepository)
    {
        $this->jwtRepository = $jwtRepository;
    }

    public function renewToken(): ?string
    {
        $payload = $this->buildJwtPayload();
        $jwt = JWTUtil::encodeJWT($payload);

        $this->jwtRepository->renewToken($jwt);

        return $jwt;
    }

    #[ArrayShape(['dummy' => "string", 'exp' => "int"])]
    private function buildJwtPayload(): array {
        return [
            'dummy' => Str::random(),
            'exp' => time() + 3600,
        ];
    }
}
