<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(BranchSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(RoleSeeder::class);

        User::create([
            'name' => 'Mohamed Said',
            'email' => 'madyrio100@gmail.com',
            'password' => bcrypt('madyrio@100'),
            'email_verified_at' => now()
        ])->assignRole('super-admin');


    }
}
