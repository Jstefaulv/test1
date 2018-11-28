<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VentasApiTest extends TestCase
{
    use MakeVentasTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateVentas()
    {
        $ventas = $this->fakeVentasData();
        $this->json('POST', '/api/v1/ventas', $ventas);

        $this->assertApiResponse($ventas);
    }

    /**
     * @test
     */
    public function testReadVentas()
    {
        $ventas = $this->makeVentas();
        $this->json('GET', '/api/v1/ventas/'.$ventas->id);

        $this->assertApiResponse($ventas->toArray());
    }

    /**
     * @test
     */
    public function testUpdateVentas()
    {
        $ventas = $this->makeVentas();
        $editedVentas = $this->fakeVentasData();

        $this->json('PUT', '/api/v1/ventas/'.$ventas->id, $editedVentas);

        $this->assertApiResponse($editedVentas);
    }

    /**
     * @test
     */
    public function testDeleteVentas()
    {
        $ventas = $this->makeVentas();
        $this->json('DELETE', '/api/v1/ventas/'.$ventas->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/ventas/'.$ventas->id);

        $this->assertResponseStatus(404);
    }
}
