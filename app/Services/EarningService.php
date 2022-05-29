<?php

namespace App\Services;

use App\Repositories\EarningRepository;
use Illuminate\Support\Collection;

class EarningService
{
    private EarningRepository $earningRepository;

    public function __construct(EarningRepository $earningRepository)
    {
        $this->earningRepository = $earningRepository;
    }

    public function getEarnings(array $consultants, string $from, string $to): Collection
    {
        return $this->earningRepository->getByDateRange($consultants, $from, $to);
    }
}
