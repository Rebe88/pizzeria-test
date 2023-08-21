<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sucursales;

class sucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sucursales::create([
            'slug' => 'san-salvador',
            'nombre' => 'San Salvador',
            'direccion' => '123 Calle Principal'
        ]);
        
        sucursales::create([
            'slug' => 'ilopango',
            'nombre' => 'Ilopango',
            'direccion' => '123 Calle Principal, Ilopango'
        ]);
        
        sucursales::create([
            'slug' => 'soyapango',
            'nombre' => 'Soyapango',
            'direccion' => '123 Calle Principal, Soyapango'
        ]);
        
        sucursales::create([
            'slug' => 'apopa',
            'nombre' => 'Apopa',
            'direccion' => '123 Calle Principal, Apopa'
        ]);
        
        sucursales::create([
            'slug' => 'zacamil',
            'nombre' => 'Zacamil',
            'direccion' => '123 Calle Principal, Zacamil'
        ]);
    }
}
