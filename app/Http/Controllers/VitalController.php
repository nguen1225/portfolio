<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Vital\PostVitalRequest;
use App\UseCases\Vital\GetHealthDataUseCase;
use App\UseCases\Vital\VitalDeleteUseCase;
use App\UseCases\Vital\VitalEditUseCase;
use App\UseCases\Vital\VitalIndexUseCase;
use App\UseCases\Vital\VitalPostUseCase;
use App\UseCases\Vital\VitalShowUseCase;
use App\UseCases\Vital\VitalUpdateUseCase;

class VitalController extends Controller
{
    private VitalIndexUseCase $vitalIndexUseCase;
    private VitalPostUseCase $vitalPostUseCase;
    private VitalShowUseCase $vitalShowUseCase;
    private VitalEditUseCase $vitalEditUseCase;
    private VitalUpdateUseCase $vitalUpdateUseCase;
    private VitalDeleteUseCase $vitalDeleteUseCase;
    private GetHealthDataUseCase $getHealthDataUseCase;

    public function __construct(
        VitalIndexUseCase $vitalIndexUseCase,
        VitalPostUseCase $vitalPostUseCase,
        VitalShowUseCase $vitalShowUseCase,
        VitalEditUseCase $vitalEditUseCase,
        VitalUpdateUseCase $vitalUpdateUseCase,
        VitalDeleteUseCase $vitalDeleteUseCase,
        GetHealthDataUseCase $getHealthDataUseCase
    )
    {
        $this->vitalIndexUseCase = $vitalIndexUseCase;
        $this->vitalPostUseCase = $vitalPostUseCase;
        $this->vitalShowUseCase = $vitalShowUseCase;
        $this->vitalEditUseCase = $vitalEditUseCase;
        $this->vitalUpdateUseCase = $vitalUpdateUseCase;
        $this->vitalDeleteUseCase = $vitalDeleteUseCase;
        $this->getHealthDataUseCase = $getHealthDataUseCase;
    }

    public function index()
    {
        return $this->vitalIndexUseCase->execute();
    }

    public function from()
    {
        return view('vital.from');
    }

    public function post(PostVitalRequest $request)
    {
        return $this->vitalPostUseCase->execute($request);
    }

    public function show(Request $request)
    {
        return $this->vitalShowUseCase->execute($request);
    }

    public function edit(Request $request)
    {
        return $this->vitalEditUseCase->execute($request);
    }

    public function update(PostVitalRequest $request)
    {
        return $this->vitalUpdateUseCase->execute($request);
    }

    public function delete(Request $request)
    {
        return $this->vitalDeleteUseCase->execute($request);
    }

    // 身長のデータ取得
    public function health()
    {
        return $this->getHealthDataUseCase->execute();
    }
}
