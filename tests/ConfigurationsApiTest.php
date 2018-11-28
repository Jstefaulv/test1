<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConfigurationsApiTest extends TestCase
{
    use MakeConfigurationsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateConfigurations()
    {
        $configurations = $this->fakeConfigurationsData();
        $this->json('POST', '/api/v1/configurations', $configurations);

        $this->assertApiResponse($configurations);
    }

    /**
     * @test
     */
    public function testReadConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $this->json('GET', '/api/v1/configurations/'.$configurations->id);

        $this->assertApiResponse($configurations->toArray());
    }

    /**
     * @test
     */
    public function testUpdateConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $editedConfigurations = $this->fakeConfigurationsData();

        $this->json('PUT', '/api/v1/configurations/'.$configurations->id, $editedConfigurations);

        $this->assertApiResponse($editedConfigurations);
    }

    /**
     * @test
     */
    public function testDeleteConfigurations()
    {
        $configurations = $this->makeConfigurations();
        $this->json('DELETE', '/api/v1/configurations/'.$configurations->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/configurations/'.$configurations->id);

        $this->assertResponseStatus(404);
    }
}
