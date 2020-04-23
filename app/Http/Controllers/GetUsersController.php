<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetUsersController extends Controller
{
    public function get()
    {
        $users = DB::table('users')
            ->select(['users.*', 'users.name', 'roles.name as role'])
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->get();
        dd($users);
        foreach ($users as $user)
        {
            echo $user->name."<br>";
        }
    }
}
