<?php
use App\Rol;
use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(["descripcion" => "admin"]);
        Rol::create(["descripcion" => "Ventas"]);
        Rol::create(["descripcion" => "Administración"]);
        Rol::create(["descripcion" => "Operaciones"]);
        Rol::create(["descripcion" => "Finanzas"]);
        Rol::create(["descripcion" => "Prevención de Riesgos"]);
    }
}
