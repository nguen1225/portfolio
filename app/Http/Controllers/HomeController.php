<?php

namespace App\Http\Controllers;

use App\UseCases\Home\HomeViewUseCase;

class HomeController extends Controller
{
    private HomeViewUseCase $homeViewUseCase;

    public function __construct(HomeViewUseCase $homeViewUseCase)
    {
        $this->homeViewUseCase = $homeViewUseCase;
    }

    public function home()
    {
        return $this->homeViewUseCase->execute();
    }
}
