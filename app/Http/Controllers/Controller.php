<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success($data): JsonResponse
    {
        $responseData = [
            'success' => true,
            'data' => $data,
        ];

        return response()
            ->json($responseData)
            ->setStatusCode(200);
    }

    protected function error(Exception $exception, int $httpCode = 400): JsonResponse
    {
        $responseData = [
            'success' => false,
            'error' => $exception->getMessage(),
        ];

        return response()
            ->json($responseData)
            ->setStatusCode($httpCode);
    }
}
