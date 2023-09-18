<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'super@super.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        if (! App::isProduction()) {
            User::factory()->count(10)->create();
        }
    }
}
