<?php

declare(strict_types=1);

namespace App\UseCases\Vital;

use App\Models\Repositories\VitalRepository;

final class VitalEditUseCase
{
    /**
     * @var App\Models\Repositories\VitalRepository
     */
    private VitalRepository $repository;

    public function __construct(VitalRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->edit($request);
    }
}
