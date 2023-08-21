<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create([
            'nombre' => 'Tomate',
            'precio' => 0.60,
        ]);

        Ingrediente::create([
            'nombre' => 'Laurel',
            'precio' => 0.25,
        ]);

        Ingrediente::create([
            'nombre' => 'Jamon',
            'precio' => 2.00,
        ]);

        Ingrediente::create([
            'nombre' => 'Queso',
            'precio' => 2.00,
        ]);

        Ingrediente::create([
            'nombre' => 'Peperoni',
            'precio' => 2.00,
        ]);

        Ingrediente::create([
            'nombre' => 'Hongos',
            'precio' => 1.50,
        ]);

        Ingrediente::create([
            'nombre' => 'Ajo',
            'precio' => 0.25,
        ]);

        Ingrediente::create([
            'nombre' => 'Loroco',
            'precio' => 0.50,
        ]);

        Ingrediente::create([
            'nombre' => 'Espinaca',
            'precio' => 0.80,
        ]);

        Ingrediente::create([
            'nombre' => 'Aceituna',
            'precio' => 2.00,
        ]);
    }
}
