<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operation_titles')->insert([
            'name' => 'nuskaiciuota_les',            
        ]);
        DB::table('operation_titles')->insert([
            'name' => 'prideta_les',            
        ]);
        DB::table('operation_titles')->insert([
            'name' => 'sukurta_sas',            
        ]);
        DB::table('operation_titles')->insert([
            'name' => 'pasalinta_sas',            
        ]);
    }
}
