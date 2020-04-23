<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SetTestUsersController extends Controller
{
    public function set()
    {
        $users = factory (User::class, 20)->create();
        //$users = factory (User::class, 20)->make();

        dd($users);
    }
}
