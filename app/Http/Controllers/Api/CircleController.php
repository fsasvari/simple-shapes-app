<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CircleCalculateRequest;
use App\Mappers\Response\CircleCalculateResponseMapper;
use App\Services\CircleService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CircleController extends Controller
{
    /**
     * @param \App\Http\Requests\Api\CircleCalculateRequest $request
     * @param \App\Services\CircleService $circleService
     * @param int|float $radius
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculate(CircleCalculateRequest $request, CircleService $circleService, $radius): JsonResponse
    {
        $circle = $circleService->calculate($radius);

        $circleCalculateResponseMapper = new CircleCalculateResponseMapper($circle);

        return new JsonResponse($circleCalculateResponseMapper, Response::HTTP_OK);
    }
}
