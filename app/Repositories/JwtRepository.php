<?php

namespace App\Repositories;

use App\Models\Entities\PersonalAccessToken;
use App\Repositories\_Core\Abstraction\AbstractRepository;
use JetBrains\PhpStorm\Pure;

class JwtRepository extends AbstractRepository
{
    #[Pure]
    public function __construct(PersonalAccessToken $model)
    {
        parent::__construct($model);
    }

    public function renewToken(string $jwt)
    {
        $this->model::query()->delete();
        $this->model::insert(['token' => $jwt]);
    }
}
