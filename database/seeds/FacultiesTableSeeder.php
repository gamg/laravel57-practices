<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Faculty::class)->create([
            'name' => 'Ingeniería'
        ]);

        factory(App\Faculty::class)->create([
            'name' => 'Ciencia'
        ]);

        factory(App\Faculty::class)->create([
            'name' => 'Arquitectura'
        ]);

        factory(App\Faculty::class)->create([
            'name' => 'Arte'
        ]);
    }
}
