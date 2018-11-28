<?php

use Faker\Factory as Faker;
use App\Models\Configurations;
use App\Repositories\ConfigurationsRepository;

trait MakeConfigurationsTrait
{
    /**
     * Create fake instance of Configurations and save it in database
     *
     * @param array $configurationsFields
     * @return Configurations
     */
    public function makeConfigurations($configurationsFields = [])
    {
        /** @var ConfigurationsRepository $configurationsRepo */
        $configurationsRepo = App::make(ConfigurationsRepository::class);
        $theme = $this->fakeConfigurationsData($configurationsFields);
        return $configurationsRepo->create($theme);
    }

    /**
     * Get fake instance of Configurations
     *
     * @param array $configurationsFields
     * @return Configurations
     */
    public function fakeConfigurations($configurationsFields = [])
    {
        return new Configurations($this->fakeConfigurationsData($configurationsFields));
    }

    /**
     * Get fake data of Configurations
     *
     * @param array $postFields
     * @return array
     */
    public function fakeConfigurationsData($configurationsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'key' => $fake->word,
            'value' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $configurationsFields);
    }
}
