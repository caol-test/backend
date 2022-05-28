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
        return $this->success([
            'jwt' => $this->jwtService->getNewToken()
        ]);
    }
}
