<?php

declare(strict_types=1);

namespace App\UseCases\User;

use App\Models\Repositories\UserRepository;

final class UserSignUseCase
{
    /**
     * @var App\Models\Repositories\UserRepository
     */
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->signUp($request);
    }
}
