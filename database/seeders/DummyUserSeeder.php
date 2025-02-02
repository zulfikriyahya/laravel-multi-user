<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =
            [
                [
                    'name' => 'Kang Operator',
                    'email' => 'operator@admin.com',
                    'role' => 'operator',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Kang Keuangan',
                    'email' => 'keuangan@admin.com',
                    'role' => 'keuangan',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Kang Marketing',
                    'email' => 'marketing@admin.com',
                    'role' => 'marketing',
                    'password' => bcrypt('password'),
                ]
            ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
