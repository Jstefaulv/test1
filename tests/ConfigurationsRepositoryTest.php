<?php

use App\Models\Configurations;
use App\Repositories\ConfigurationsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConfigurationsRepositoryTest extends TestCase
{
    use MakeConfigurationsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ConfigurationsRepository
     */
    protected $configurationsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->configurationsRepo = App::make(ConfigurationsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateConfigurations()
    {
        $configurations = $this->fakeConfigurationsData();
        $createdConfigurations = $this->configurationsRepo->create($configurations);
        $createdConfigurations = $createdConfigurations->toArray();
        $this->assertArrayHasKey('id', $createdConfigurations);
        $this->assertNotNull($createdConfigurations['id'], 'Created Configurations must have id specified');
        $this->assertNotNull(Configurations::find($createdConfigurations['id']), 'Configurations with given id must be in DB');
        $this->assertModelData($configurations, $createdConfigurations);
    }

    /**
     * @test read
     */
    public function testReadConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $dbConfigurations = $this->configurationsRepo->find($configurations->id);
        $dbConfigurations = $dbConfigurations->toArray();
        $this->assertModelData($configurations->toArray(), $dbConfigurations);
    }

    /**
     * @test update
     */
    public function testUpdateConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $fakeConfigurations = $this->fakeConfigurationsData();
        $updatedConfigurations = $this->configurationsRepo->update($fakeConfigurations, $configurations->id);
        $this->assertModelData($fakeConfigurations, $updatedConfigurations->toArray());
        $dbConfigurations = $this->configurationsRepo->find($configurations->id);
        $this->assertModelData($fakeConfigurations, $dbConfigurations->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $resp = $this->configurationsRepo->delete($configurations->id);
        $this->assertTrue($resp);
        $this->assertNull(Configurations::find($configurations->id), 'Configurations should not exist in DB');
    }
}
