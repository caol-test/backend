<?php

namespace App\Http\Controllers;

use App\Exceptions\ResponseHandler;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ResponseHandler;

    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getConsultants(): JsonResponse
    {
        $data = $this->userService->getConsultants();

        return $this->success($data);
    }
}
