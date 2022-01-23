<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaryGenre\CreateRequest;
use Illuminate\Http\Request;
use App\UseCases\DiaryGenre\DiaryGenrePostUseCase;
use App\UseCases\DiaryGenre\DiaryGenreEditUseCase;
use App\UseCases\DiaryGenre\DiaryGenreUpdateUseCase;

class DiaryGenreController extends Controller
{
    private DiaryGenrePostUseCase $diaryGenrePostUseCase;
    private DiaryGenreEditUseCase $diaryGenreEditUseCase;
    private DiaryGenreUpdateUseCase $diaryGenreUpdateUseCase;

    public function __construct(
        DiaryGenrePostUseCase $diaryGenrePostUseCase,
        DiaryGenreEditUseCase $diaryGenreEditUseCase,
        DiaryGenreUpdateUseCase $diaryGenreUpdateUseCase
    )
    {
        $this->diaryGenrePostUseCase = $diaryGenrePostUseCase;
        $this->diaryGenreEditUseCase = $diaryGenreEditUseCase;
        $this->diaryGenreUpdateUseCase = $diaryGenreUpdateUseCase;
    }

    public function form()
    {
        return view('genre.form');
    }

    public function post(CreateRequest $request)
    {
        return $this->diaryGenrePostUseCase->execute($request);
    }

    public function edit(Request $request)
    {
        return $this->diaryGenreEditUseCase->execute($request);
    }

    public function update(CreateRequest $request)
    {
        return $this->diaryGenreUpdateUseCase->execute($request);
    }
}
