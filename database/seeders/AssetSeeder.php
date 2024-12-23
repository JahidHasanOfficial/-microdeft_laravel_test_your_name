<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        

        DB::table('assets')->insert([
            [
                'name' => 'Mouse',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Keyboard',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Monitor',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'CPU',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Water bottle',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tissue paper',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Table fan',
                'status' => 'Available',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        //
    }
}
