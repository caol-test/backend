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
        $earnings = $this->earningRepository->getByDateRange($consultants, $from, $to);
        $earningsByUser = $earnings->groupBy('full_name');

        return $earningsByUser->map(function ($userRows, $userFullName) {
            $userRows[] = $this->sumTotalsForUser($userFullName, $userRows);

            return $userRows;
        })->flatMap(function ($item) {
            return $item;
        });
    }

    private function sumTotalsForUser(string $userFullName, Collection $items): array
    {
        return $items->reduce(function ($carry, $item) use ($userFullName) {
            return [
                'month_year' => 'BALANCE',
                'full_name' => $userFullName,
                'net_earnings' => ($carry['net_earnings'] ?? 0) + $item['net_earnings'],
                'fixed_cost' => ($carry['fixed_cost'] ?? 0) + $item['fixed_cost'],
                'commission' => ($carry['commission'] ?? 0) + $item['commission'],
                'profit' => ($carry['profit'] ?? 0) + $item['profit'],
            ];
        }, []);
    }
}
