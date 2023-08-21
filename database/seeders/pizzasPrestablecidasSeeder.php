<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pizzasPrestablecidas;

class pizzasPrestablecidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PizzasPrestablecidas::create([
            'nombre' => 'Personalizada',
            'preciobase' => 5.00,
        ]);
        PizzasPrestablecidas::create([
            'nombre' => 'Margarita',
            'preciobase' => 10.00,
        ]);
        PizzasPrestablecidas::create([
            'nombre' => 'Jamon',
            'preciobase' => 7.00,
        ]);
        PizzasPrestablecidas::create([
            'nombre' => 'Queso',
            'preciobase' => 6.00,
        ]);
        PizzasPrestablecidas::create([
            'nombre' => 'Peperoni',
            'preciobase' => 8.00,
        ]);
    }
}
