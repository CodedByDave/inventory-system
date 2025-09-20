<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Support\Collection;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnValue;

abstract class Repository
{
    /**
     * avoid boilerplate code in child repositories
     */
    public function __construct(protected Model $model) {}

    public function Model(): Model
    {
        return $this->model;
    }

    public function query(): Builder
    {
        return $this->model->query();
    }

    
}

