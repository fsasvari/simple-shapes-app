<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\TriangleCalculateRequest;
use App\Mappers\Response\TriangleCalculateResponseMapper;
use App\Services\TriangleService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TriangleController extends Controller
{
    /**
     * @param \App\Http\Requests\Api\TriangleCalculateRequest $request
     * @param \App\Services\TriangleService $triangleService
     * @param int|float $a
     * @param int|float $b
     * @param int|float $c
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculate(TriangleCalculateRequest $request, TriangleService $triangleService, $a, $b, $c): JsonResponse
    {
        $triangle = $triangleService->calculate($a, $b, $c);

        $triangleCalculateResponseMapper = new TriangleCalculateResponseMapper($triangle);

        return new JsonResponse($triangleCalculateResponseMapper, Response::HTTP_OK);
    }
}
