<?php

use App\Models\Ventas;
use App\Repositories\VentasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VentasRepositoryTest extends TestCase
{
    use MakeVentasTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var VentasRepository
     */
    protected $ventasRepo;

    public function setUp()
    {
        parent::setUp();
        $this->ventasRepo = App::make(VentasRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateVentas()
    {
        $ventas = $this->fakeVentasData();
        $createdVentas = $this->ventasRepo->create($ventas);
        $createdVentas = $createdVentas->toArray();
        $this->assertArrayHasKey('id', $createdVentas);
        $this->assertNotNull($createdVentas['id'], 'Created Ventas must have id specified');
        $this->assertNotNull(Ventas::find($createdVentas['id']), 'Ventas with given id must be in DB');
        $this->assertModelData($ventas, $createdVentas);
    }

    /**
     * @test read
     */
    public function testReadVentas()
    {
        $ventas = $this->makeVentas();
        $dbVentas = $this->ventasRepo->find($ventas->id);
        $dbVentas = $dbVentas->toArray();
        $this->assertModelData($ventas->toArray(), $dbVentas);
    }

    /**
     * @test update
     */
    public function testUpdateVentas()
    {
        $ventas = $this->makeVentas();
        $fakeVentas = $this->fakeVentasData();
        $updatedVentas = $this->ventasRepo->update($fakeVentas, $ventas->id);
        $this->assertModelData($fakeVentas, $updatedVentas->toArray());
        $dbVentas = $this->ventasRepo->find($ventas->id);
        $this->assertModelData($fakeVentas, $dbVentas->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteVentas()
    {
        $ventas = $this->makeVentas();
        $resp = $this->ventasRepo->delete($ventas->id);
        $this->assertTrue($resp);
        $this->assertNull(Ventas::find($ventas->id), 'Ventas should not exist in DB');
    }
}
