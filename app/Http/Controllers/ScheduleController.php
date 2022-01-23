<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Schedule\DiaryCreationRequest;
use App\UseCases\Schedule\ScheduleDateUseCase;
use App\UseCases\Schedule\ScheduleDeleteUseCase;
use App\UseCases\Schedule\ScheduleEditUseCase;
use App\UseCases\Schedule\ScheduleFormUseCase;
use App\UseCases\Schedule\ScheduleIndexUseCase;
use App\UseCases\Schedule\SchedulePostUseCase;
use App\UseCases\Schedule\ScheduleSearchUseCase;
use App\UseCases\Schedule\ScheduleShowUseCase;
use App\UseCases\Schedule\ScheduleUpdateUseCase;

class ScheduleController extends Controller
{
    private ScheduleIndexUseCase $scheduleIndexUseCase;
    private ScheduleSearchUseCase $scheduleSearchUseCase;
    private ScheduleDateUseCase $scheduleDateUseCase;
    private ScheduleFormUseCase $scheduleFormUseCase;
    private SchedulePostUseCase $schedulePostUseCase;
    private ScheduleShowUseCase $scheduleShowUseCase;
    private ScheduleEditUseCase $scheduleEditUseCase;
    private ScheduleUpdateUseCase $scheduleUpdateUseCase;
    private ScheduleDeleteUseCase $scheduleDeleteUseCase;

    public function __construct(
        ScheduleIndexUseCase $scheduleIndexUseCase,
        ScheduleSearchUseCase $scheduleSearchUseCase,
        ScheduleDateUseCase $scheduleDateUseCase,
        ScheduleFormUseCase $scheduleFormUseCase,
        SchedulePostUseCase $schedulePostUseCase,
        ScheduleShowUseCase $scheduleShowUseCase,
        ScheduleEditUseCase $scheduleEditUseCase,
        ScheduleUpdateUseCase $scheduleUpdateUseCase,
        ScheduleDeleteUseCase $scheduleDeleteUseCase
    )
    {
        $this->scheduleIndexUseCase = $scheduleIndexUseCase;
        $this->scheduleSearchUseCase = $scheduleSearchUseCase;
        $this->scheduleDateUseCase = $scheduleDateUseCase;
        $this->scheduleFormUseCase = $scheduleFormUseCase;
        $this->schedulePostUseCase = $schedulePostUseCase;
        $this->scheduleShowUseCase = $scheduleShowUseCase;
        $this->scheduleEditUseCase = $scheduleEditUseCase;
        $this->scheduleUpdateUseCase = $scheduleUpdateUseCase;
        $this->scheduleDeleteUseCase = $scheduleDeleteUseCase;
    }

    public function index()
    {
        return $this->scheduleIndexUseCase->execute();
    }

    public function search(Request $request)
    {
        return $this->scheduleSearchUseCase->execute($request);
    }

    public function scheduleDate()
    {
        return $this->scheduleDateUseCase->execute();
    }

    public function from()
    {
        return $this->scheduleFormUseCase->execute();
    }

    public function post(DiaryCreationRequest $request)
    {
        return $this->schedulePostUseCase->execute($request);
    }

    public function show(Request $request)
    {
        return $this->scheduleShowUseCase->execute($request);
    }

    public function edit(Request $request)
    {
        return $this->scheduleEditUseCase->execute($request);
    }

    public function update(DiaryCreationRequest $request)
    {
        return $this->scheduleUpdateUseCase->execute($request);
    }

    public function delete(Request $request)
    {
        return $this->scheduleDeleteUseCase->execute($request);
    }
}
