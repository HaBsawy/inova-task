<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username'      => 'eslam94',
                'password'      => bcrypt('123123'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'username'      => 'ahmed',
                'password'      => bcrypt('123123'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'username'      => 'hossam',
                'password'      => bcrypt('123123'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
