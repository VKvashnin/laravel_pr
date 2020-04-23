<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Администратор'
        ]);

        DB::table('roles')->insert([
            'name' => 'Модератор'
        ]);

        DB::table('roles')->insert([
            'name' => 'Пользователь'
        ]);
    }
}
