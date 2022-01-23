<?php

declare(strict_types=1);

namespace App\UseCases\Login;

use App\Models\Repositories\UserLoginRepository;

final class LoginCheckUseCase
{
    /**
     * @var App\Models\Repositories\UserLoginRepository
     */
    private UserLoginRepository $repository;

    public function __construct(UserLoginRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->loginCheck($request);
    }
}
