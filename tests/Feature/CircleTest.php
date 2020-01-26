<?php

namespace Tests\Feature;

use App\Enums\ShapeTypeEnum;
use Illuminate\Http\Response;
use Tests\TestCase;

class CircleTest extends TestCase
{
    /**
     * @test
     */
    public function callCircleEndpointWithIntegerNumbers_ExpectSuccessResponse()
    {
        $radius = 2;

        $response = $this->get('/circle/'.$radius);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'type'    => ShapeTypeEnum::Circle,
            'radius'  => $radius,
        ]);
    }

    /**
     * @test
     */
    public function callCircleEndpointWithDecimalNumbers_ExpectSuccessResponse()
    {
        $radius = 2.22;

        $response = $this->get('/circle/'.$radius);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'type'    => ShapeTypeEnum::Circle,
            'radius'  => $radius,
        ]);
    }

    /**
     * @test
     */
    public function callCircleEndpoint_ExpectBadRequestException()
    {
        $radius = "asdf";

        $response = $this->get('/circle/'.$radius);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
