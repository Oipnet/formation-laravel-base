<?php

namespace App\Http\Controllers;

use App\Repositories\HouseRepositoryInterface;
use Illuminate\View\View;

class HouseController extends Controller
{
    public function __construct(
        private HouseRepositoryInterface $houseRepository
    )
    {
    }

    public function index(): View
    {
        $houses = $this->houseRepository->findAll(paginate: true);

        return view('houses.list', compact('houses'));
    }
}
