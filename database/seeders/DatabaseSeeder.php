<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users =
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
        foreach ($users as $user => $value) {
            User::create($value);
        }
    }
}
