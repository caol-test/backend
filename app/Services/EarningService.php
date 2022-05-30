<?php

namespace App\Services;

use App\Repositories\EarningRepository;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\ArrayShape;

class EarningService
{
    private EarningRepository $earningRepository;

    public function __construct(EarningRepository $earningRepository)
    {
        $this->earningRepository = $earningRepository;
    }


    public function getPercentsByConsultant(array $consultants, string $from, string $to): array
    {
        $earnings = $this->earningRepository->getByDateRange($consultants, $from, $to);
        $earningsSum = $earnings->reduce(function ($carry, $item) {
            return $carry + $item->net_earnings;
        }, 0);

        $earningsPercentsByUser = $earnings->groupBy(['full_name'])
            ->map(function ($items) use ($earningsSum) {
                $userEarnings = $items->reduce(function ($carry, $item) {
                    return $carry + $item->net_earnings;
                }, 0);

                return round($userEarnings * 100 / $earningsSum, 2);
            });

        return [
            'series' => $earningsPercentsByUser->values(),
            'labels' => $earningsPercentsByUser->keys(),
        ];
    }

    #[ArrayShape(['series' => "mixed[]", 'x_axis' => "\Illuminate\Support\Collection"])]
    public function getFixedCostAverage(array $consultants, string $from, string $to): array
    {
        $earnings = $this->earningRepository->getByDateRange($consultants, $from, $to);

        $users = $earnings->groupBy(['full_name'])
            ->map(function ($items) {
                return $items[0]->fixed_cost;
            });

        $salariesSum = $users->reduce(function ($carry, $item) {
            return $carry + $item;
        }, 0);

        $salariesAvg = $salariesSum / $users->count() * -1;

        $monthNames = $earnings->groupBy('month_year')->keys();

        $series = $earnings->groupBy(['full_name', 'month_year'])
            ->map(function ($monthsRows, $user) use ($monthNames) {
                $userMonths = $monthNames->map(function ($monthName) use ($monthsRows) {
                    return $monthsRows[$monthName][0]->net_earnings ?? 0;
                });

                return [
                    'name' => $user,
                    'type' => 'column',
                    'data' => $userMonths,
                ];
            })->values()->toArray();

        $avgCostsArray = $monthNames->map(function () use ($salariesAvg) {
            return $salariesAvg;
        })->values()->toArray();

        $series[] = [
            'name' => 'Average Cost',
            'type' => 'line',
            'data' => $avgCostsArray,
        ];

        return [
            'series' => $series,
            'x_axis' => $monthNames,
        ];
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
