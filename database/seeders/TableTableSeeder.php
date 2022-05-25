<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_numbers = [1,2,3,4,5];
        for($i=0; $i < count($table_numbers); $i++){
            DB::table('tables')->insert([
                'number' => $table_numbers[$i],
            ]);
        }
    }
}
