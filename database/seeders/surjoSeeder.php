<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
// use Illuminate\Support\Str;

class surjoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\surjo::factory(5)->create();
        // DB::table('surjos')->factory(10)->create();

    }
}
