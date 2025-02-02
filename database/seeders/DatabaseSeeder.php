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
                    'name' => 'Administrator',
                    'email' => 'admin@admin.com',
                    'role' => 'admin',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                ],
                [
                    'name' => 'Kang Operator',
                    'email' => 'operator@admin.com',
                    'role' => 'operator',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                ],
                [
                    'name' => 'Kang Keuangan',
                    'email' => 'keuangan@admin.com',
                    'role' => 'keuangan',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                ],
                [
                    'name' => 'Kang Marketing',
                    'email' => 'marketing@admin.com',
                    'role' => 'marketing',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                ]
            ];
        foreach ($users as $user => $value) {
            User::create($value);
        }
    }
}
