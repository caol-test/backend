<?php

namespace App\Http\Controllers;

use App\Services\EarningService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    private EarningService $earningService;

    public function __construct(EarningService $earningService)
    {
        $this->earningService = $earningService;
    }

    public function getEarnings(Request $request): JsonResponse
    {
        $consultants = $request->get('consultants');
        $from = $request->get('from');
        $to = $request->get('to');

        return $this->success([
            'earnings' => $this->earningService->getEarnings($consultants, $from, $to),
        ]);
    }
}
