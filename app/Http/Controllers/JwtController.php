<?php

namespace App\Http\Controllers;

use App\Exceptions\ResponseHandler;
use App\Services\JwtService;
use Illuminate\Http\JsonResponse;

class JwtController extends Controller
{
    use ResponseHandler;

    private JwtService $jwtService;

    public function __construct(JwtService $jwtService)
    {
        $this->jwtService = $jwtService;
    }

    public function renewJwt(): JsonResponse
    {
        $data = $this->jwtService->renewToken();

        return $this->success($data);
    }
}
