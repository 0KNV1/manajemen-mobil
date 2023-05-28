<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Manager1',
            'email' => 'admin@app.com',
            'password' => bcrypt('password'),
            'roles' => 'MANAGER',
        ]);
    }
}
