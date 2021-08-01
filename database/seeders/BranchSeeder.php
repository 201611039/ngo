<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            [
                'name' => 'Mbeya Branch',
                'email' => 'maishabora@gmail.com',
                'address' => 'Ikuti, Mbeya (M), Mbeya',
                'phone' => '+255 755 456 529',
                'type' => 1,
            ]
        ];

        foreach ($branches as $branch) {
            Branch::firstOrCreate([
                'name' => $branch['name'],
                'email' => $branch['email'],
                'address' => $branch['address'],
                'phone' => $branch['phone'],
                'type' => $branch['type']
            ]);
        }
    }
}
