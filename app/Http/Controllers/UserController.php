<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Exception;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getConsultants(): JsonResponse
    {
        try {
            $data = $this->userService->getConsultants();

            return $this->success($data);
        } catch (Exception $exception) {
            return $this->error($exception);
        }
    }
}
