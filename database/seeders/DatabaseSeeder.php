<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'Павел',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin11'),
            'role' => 'admin',
        ]);
        $this->call([
            ProductSeeder::class
        ]);
    }
}
