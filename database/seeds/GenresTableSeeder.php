<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Боевик'
        ]);

        DB::table('genres')->insert([
            'name' => 'Детектив'
        ]);

        DB::table('genres')->insert([
            'name' => 'Документальный'
        ]);

        DB::table('genres')->insert([
            'name' => 'Драма'
        ]);

        DB::table('genres')->insert([
            'name' => 'Исторический'
        ]);

        DB::table('genres')->insert([
            'name' => 'Комедия'
        ]);

        DB::table('genres')->insert([
            'name' => 'Криминал'
        ]);

        DB::table('genres')->insert([
            'name' => 'Мелодрама'
        ]);

        DB::table('genres')->insert([
            'name' => 'Мистика'
        ]);

        DB::table('genres')->insert([
            'name' => 'Приключения'
        ]);

        DB::table('genres')->insert([
            'name' => 'Фильмы-катастрофа'
        ]);

        DB::table('genres')->insert([
            'name' => 'Триллер'
        ]);

        DB::table('genres')->insert([
            'name' => 'Ужасы'
        ]);

        DB::table('genres')->insert([
            'name' => 'Фантастика'
        ]);

        DB::table('genres')->insert([
            'name' => 'Фэнтези'
        ]);
    }
}
