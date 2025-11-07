<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['name' => 'Tech']);
        DB::table('categories')->insert(['name' => 'Education']);
        DB::table('categories')->insert(['name' => 'Fashion']);
        DB::table('categories')->insert(['name' => 'Travel']);
    }
}
