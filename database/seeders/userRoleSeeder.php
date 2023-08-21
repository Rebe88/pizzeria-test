<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class userRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $adminUser->assignRole("admin");

        $clienteUser = User::create([
            'name' => 'Cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $clienteUser->assignRole("cliente");

        $clienteUser1 = User::create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $clienteUser1->assignRole("cliente");

        $clienteUser2 = User::create([
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $clienteUser2->assignRole("cliente");
    }
}
