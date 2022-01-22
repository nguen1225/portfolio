<?php

declare(strict_types=1);

namespace App\UseCases;

use App\Models\Repositories\HomeRepository;

final class HomeViewUseCase
{
    /**
     * @var App\Models\Repositories\HomeRepository
     */
    private HomeRepository $repository;

    public function __construct(HomeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute()
    {
        return $this->repository->home();
    }
}
