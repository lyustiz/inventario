<?php

use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('configuracion')->insert(array(
            'estatus' => '1',
            'titulo' => 'Disculpe...',
            'mensaje' => 'Pagina en Mantenimiento',
            'urlimg' => 'https://'
            ));

    }
}
