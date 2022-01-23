<?php

declare(strict_types=1);

namespace App\UseCases\Schedule;

use App\Models\Repositories\ScheduleRepository;

final class ScheduleUpdateUseCase
{
    /**
     * @var App\Models\Repositories\ScheduleRepository
     */
    private ScheduleRepository $repository;

    public function __construct(ScheduleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->update($request);
    }
}
