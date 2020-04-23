<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DenuncianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denunciantes')->insert([
            [
                "id"=> "1",
                "nombre"=> "01",
                "direccion"=> "S/R",
                "correo_electronico"=> "S/R.",
                "telefono"=> "S/R",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}
