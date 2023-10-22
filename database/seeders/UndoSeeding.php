<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UndoSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // DB::table('parts_master_list')->truncate();
        // DB::table('categories')->truncate();
        // DB::table('manufacturers')->truncate();
        // DB::table('descriptions')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
