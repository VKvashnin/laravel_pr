<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Models\Year::class, 20)->create();
        for ($i=1970; $i<=2022; $i++)
        {
            DB::table('years')->insert([
                'year' => $i
            ]);
        }
    }
}
