<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(OptionsTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigurationsTableSeeder::class);
        $this->call(ResumenVentasSeeder::class);
    }
}
