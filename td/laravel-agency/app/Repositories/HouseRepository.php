<?php

namespace App\Repositories;

use App\Models\House;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class HouseRepository implements HouseRepositoryInterface
{
    public function __construct(
        private House $house
    )
    {
    }

    public function findAll($paginate = false): Collection|LengthAwarePaginator
    {
        return $paginate ? $this->house->paginate(10) : $this->house->get();
    }
}
