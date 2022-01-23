<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Schedule\DiaryCreationRequest;
use App\UseCases\Schedule\ScheduleDateUseCase;
use App\UseCases\Schedule\ScheduleDeleteSUseCase;
use App\UseCases\Schedule\ScheduleEditSUseCase;
use App\UseCases\Schedule\ScheduleFormUseCase;
use App\UseCases\Schedule\ScheduleIndexUseCase;
use App\UseCases\Schedule\SchedulePostUseCase;
use App\UseCases\Schedule\ScheduleSearchUseCase;
use App\UseCases\Schedule\ScheduleShowUseCase;
use App\UseCases\Schedule\ScheduleUpdateSUseCase;

class ScheduleController extends Controller
{
    private ScheduleIndexUseCase $scheduleIndexUseCase;
    private ScheduleSearchUseCase $scheduleSearchUseCase;
    private ScheduleDateUseCase $scheduleDateUseCase;
    private ScheduleFormUseCase $scheduleFormUseCase;
    private SchedulePostUseCase $schedulePostUseCase;
    private ScheduleShowUseCase $scheduleShowUseCase;
    private ScheduleEditSUseCase $scheduleEditSUseCase;
    private ScheduleUpdateSUseCase $scheduleUpdateSUseCase;
    private ScheduleDeleteSUseCase $scheduleDeleteSUseCase;

    public function __construct(
        ScheduleIndexUseCase $scheduleIndexUseCase,
        ScheduleSearchUseCase $scheduleSearchUseCase,
        ScheduleDateUseCase $scheduleDateUseCase,
        ScheduleFormUseCase $scheduleFormUseCase,
        SchedulePostUseCase $schedulePostUseCase,
        ScheduleShowUseCase $scheduleShowUseCase,
        ScheduleEditSUseCase $scheduleEditSUseCase,
        ScheduleUpdateSUseCase $scheduleUpdateSUseCase,
        ScheduleDeleteSUseCase $scheduleDeleteSUseCase
    )
    {
        $this->scheduleIndexUseCase = $scheduleIndexUseCase;
        $this->scheduleSearchUseCase = $scheduleSearchUseCase;
        $this->scheduleDateUseCase = $scheduleDateUseCase;
        $this->scheduleFormUseCase = $scheduleFormUseCase;
        $this->schedulePostUseCase = $schedulePostUseCase;
        $this->scheduleShowUseCase = $scheduleShowUseCase;
        $this->scheduleEditSUseCase = $scheduleEditSUseCase;
        $this->scheduleUpdateSUseCase = $scheduleUpdateSUseCase;
        $this->scheduleDeleteSUseCase = $scheduleDeleteSUseCase;
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
        return $this->scheduleEditSUseCase->execute($request);
    }

    public function update(DiaryCreationRequest $request)
    {
        return $this->scheduleUpdateSUseCase->execute($request);
    }

    public function delete(Request $request)
    {
        return $this->scheduleDeleteSUseCase->execute($request);
    }
}
