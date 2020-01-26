<?php

namespace Tests\Feature;

use App\Enums\ShapeTypeEnum;
use Illuminate\Http\Response;
use Tests\TestCase;

class TriangleTest extends TestCase
{
    /**
     * @test
     */
    public function callTriangleEndpointWithIntegerNumbers_ExpectSuccessResponse()
    {
        $a = 2;
        $b = 3;
        $c = 4;

        $response = $this->get('/triangle/'.$a.'/'.$b.'/'.$c);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'type'    => ShapeTypeEnum::Triangle,
            'a'       => $a,
            'b'       => $b,
            'c'       => $c,
        ]);
    }

    /**
     * @test
     */
    public function callTriangleEndpointWithDecimalNumbers_ExpectSuccessResponse()
    {
        $a = 2.22;
        $b = 3.33;
        $c = 4.44;

        $response = $this->get('/triangle/'.$a.'/'.$b.'/'.$c);

        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'type'    => ShapeTypeEnum::Triangle,
            'a'       => $a,
            'b'       => $b,
            'c'       => $c,
        ]);
    }

    /**
     * @test
     */
    public function callTriangleEndpoint_ExpectBadRequestException()
    {
        $a = "asdf";
        $b = "bsdf";
        $c = "csdf";

        $response = $this->get('/triangle/'.$a.'/'.$b.'/'.$c);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
