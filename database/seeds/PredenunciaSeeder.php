<?php

use Illuminate\Database\Seeder;

class PredenunciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('predenuncias')->insert([
            [
                "id"=> "1",
                "folio"=> "001",
                "denunciante_id"=> 1,
                "lugar_hechos_id"=> 1,
                "descripcion"=> 1,
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ]);
    }
}
