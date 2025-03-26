<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('employees')->insert([
            'name'=>Str::random(5),
            'address'=>Str::random(10),
            'email'=>Str::random(5).'@gmail.com',
        ]);
    }
}
