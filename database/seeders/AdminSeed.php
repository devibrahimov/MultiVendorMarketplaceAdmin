<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrator')->insert([
            'name' => 'Admin',
            'surname' => 'Administrator',
            'role' => 1,
            'aprovel' => 1,
            'email' => 'demo@admin.com',
            'password' => Hash::make(123456)
        ]);
    }
}
