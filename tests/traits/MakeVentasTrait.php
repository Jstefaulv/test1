<?php

use Faker\Factory as Faker;
use App\Models\Ventas;
use App\Repositories\VentasRepository;

trait MakeVentasTrait
{
    /**
     * Create fake instance of Ventas and save it in database
     *
     * @param array $ventasFields
     * @return Ventas
     */
    public function makeVentas($ventasFields = [])
    {
        /** @var VentasRepository $ventasRepo */
        $ventasRepo = App::make(VentasRepository::class);
        $theme = $this->fakeVentasData($ventasFields);
        return $ventasRepo->create($theme);
    }

    /**
     * Get fake instance of Ventas
     *
     * @param array $ventasFields
     * @return Ventas
     */
    public function fakeVentas($ventasFields = [])
    {
        return new Ventas($this->fakeVentasData($ventasFields));
    }

    /**
     * Get fake data of Ventas
     *
     * @param array $postFields
     * @return array
     */
    public function fakeVentasData($ventasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'mes' => $fake->randomDigitNotNull,
            'rut' => $fake->randomDigitNotNull,
            'sucursal' => $fake->word,
            'codigoVendedor' => $fake->word,
            'superFamilia' => $fake->word,
            'familia' => $fake->word,
            'codigo' => $fake->randomDigitNotNull,
            'unidadPrimaria' => $fake->word,
            'giro' => $fake->randomDigitNotNull,
            'canal' => $fake->randomDigitNotNull,
            'zona' => $fake->randomDigitNotNull,
            'ruta' => $fake->word,
            'rutaAutoventa' => $fake->word,
            'neto' => $fake->randomDigitNotNull,
            'cantidad' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $ventasFields);
    }
}
