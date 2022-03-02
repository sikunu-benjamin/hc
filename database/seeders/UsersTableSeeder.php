<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'sikunubradley@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Bradley Sikunu',
                'email' => 'sikunubradley@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now()
            ]);
        }

        $user1 = User::where('email', 'jonaskapela7@gmail.com')->first();

        if (!$user1) {
            User::create([
                'name' => 'Architecte Jonas Kapela',
                'email' => 'jonaskapela7@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]);
        }
    }
}
