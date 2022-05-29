<?php

namespace App\Repositories;

use App\Models\Entities\VEarning;
use App\Repositories\_Core\Abstraction\AbstractRepository;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\Pure;

class EarningRepository extends AbstractRepository
{
    #[Pure]
    public function __construct(VEarning $model)
    {
        parent::__construct($model);
    }

    public function getByDateRange(array $consultants, string $from, string $to): Collection
    {
        return $this->model::query()
            ->whereBetween('year_month', [$from, $to])
            ->whereIn('username', $consultants)
            ->get();
    }
}
