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
        // $this->call(UsersTableSeeder::class);
        $this->call(EstadosSeeder::class);
        $this->call(MunicipiosSeeder::class);

        $this->call(LugarHechosSeeder::class);
        $this->call(DenuncianteSeeder::class);
        $this->call(PredenunciaSeeder::class);
    }
}
