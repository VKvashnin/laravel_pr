<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Country::class, 20)->create();
        /*
        DB::table('countries')->insert([
            'name' => 'США'
        ]);
        DB::table('countries')->insert([
            'name' => 'Великобритания'
        ]);
        DB::table('countries')->insert([
            'name' => 'Франция'
        ]);
        DB::table('countries')->insert([
            'name' => 'Украина'
        ]);
        DB::table('countries')->insert([
            'name' => 'Россия'
        ]);
        DB::table('countries')->insert([
            'name' => 'Автралия'
        ]);
        DB::table('countries')->insert([
            'name' => 'Турция'
        ]);
        DB::table('countries')->insert([
            'name' => 'Китай'
        ]);
        DB::table('countries')->insert([
            'name' => 'Италия'
        ]);
        DB::table('countries')->insert([
            'name' => 'Республика Корея'
        ]);
        DB::table('countries')->insert([
            'name' => 'Индия'
        ]);
        */
    }
}
