<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Cristhian Cañete',
            'email' => 'abc@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        User::factory(99)->create();
    }
}
