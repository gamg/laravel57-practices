<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Career::class)->create([
            'name' => 'Sistemas',
            'faculty_id' => 1
        ]);

        factory(App\Career::class)->create([
            'name' => 'Civil',
            'faculty_id' => 1
        ]);

        factory(App\Career::class)->create([
            'name' => 'Eléctrica',
            'faculty_id' => 1
        ]);

        factory(App\Career::class)->create([
            'name' => 'Química',
            'faculty_id' => 1
        ]);

        factory(App\Career::class)->create([
            'name' => 'Química pura',
            'faculty_id' => 2
        ]);

        factory(App\Career::class)->create([
            'name' => 'Matemática',
            'faculty_id' => 2
        ]);

        factory(App\Career::class)->create([
            'name' => 'Física',
            'faculty_id' => 2
        ]);

        factory(App\Career::class)->create([
            'name' => 'Arquitectura',
            'faculty_id' => 3
        ]);

        factory(App\Career::class)->create([
            'name' => 'Diseño Industrial',
            'faculty_id' => 3
        ]);

        factory(App\Career::class)->create([
            'name' => 'Medios audiovisuales',
            'faculty_id' => 4
        ]);

        factory(App\Career::class)->create([
            'name' => 'Artes escénicas',
            'faculty_id' => 4
        ]);

        factory(App\Career::class)->create([
            'name' => 'Diseño gráfico',
            'faculty_id' => 4
        ]);
    }
}
