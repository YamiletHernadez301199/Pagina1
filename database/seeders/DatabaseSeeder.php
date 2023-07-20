<?php

namespace Database\Seeders;

use App\Models\Pagina;
use Database\Factories\paginaFactory;
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
        // \App\Models\User::factory(10)->create();
        paginaFactory::factoryForModel('Pagina')->count(10)->create();
    }
}
