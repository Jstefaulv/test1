<?php

use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('PL_CONFIGURATIONS')->delete();
        
        \DB::table('PL_CONFIGURATIONS')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'app.name',
                'value' => 'oviedo',
                'created_at' => '2017-05-21 08:41:01',
                'updated_at' => '2017-05-30 08:49:42',
                'deleted_at' => NULL,
            )
        ));
    }
}
