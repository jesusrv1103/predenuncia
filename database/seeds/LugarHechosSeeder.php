<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LugarHechosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lugar_hechos')->insert([
            [
                "id"=> "1",
                "fecha"=> "2020-04-20",
                "calle"=> "S/R",
                "colonia"=> "S/R.",
                "numero"=> "S/R.",
                "municipio_id"=> 1,
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}
