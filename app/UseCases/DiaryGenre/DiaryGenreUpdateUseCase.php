<?php

declare(strict_types=1);

namespace App\UseCases\DiaryGenre;

use App\Models\Repositories\DiaryGenreRepository;

final class DiaryGenreUpdateUseCase
{
    /**
     * @var App\Models\Repositories\DiaryGenreRepository
     */
    private DiaryGenreRepository $repository;

    public function __construct(DiaryGenreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute($request)
    {
        return $this->repository->update($request);
    }
}
