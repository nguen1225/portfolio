<?php

declare(strict_types=1);

namespace App\UseCases\Password;

use App\Models\Repositories\UserPasswordRepository;

final class PasswordGenerateUrlUseCase
{
    /**
     * @var App\Models\Repositories\UserPasswordRepository
     */
    private UserPasswordRepository $repository;

    public function __construct(UserPasswordRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->generateUrl($request);
    }
}
