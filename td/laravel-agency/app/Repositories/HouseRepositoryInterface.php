<?php

namespace App\Repositories;

use App\Models\House;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface HouseRepositoryInterface
{
    /**
     * @return Collection<House>
     */
    public function findAll(): Collection|LengthAwarePaginator;
}
