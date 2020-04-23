<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(50);

        return view('layouts/admin/users/index',compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('role', 'status')->find($id);
        $arr1 = Status::select('name')->get();
        $arr2 = Role::select('name')->get();
        foreach ($arr1 as $status)
        {
            $statuses[] = $status->name;
        }
        foreach ($arr2 as $role)
        {
            $roles[] = $role->name;
        }

        return view('layouts/admin/users/edit', compact('user', 'statuses', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user): RedirectResponse
    {
        $save = User::find($user->id);

        $save['login'] = $request['login'];
        $save['email'] = $request['email'];
        $save['role_id'] = $request['role']+1;
        $save['status_id'] = $request['status']+1;

        $save->save();

        return redirect()->route('admin.users.index')->with('alert', 'Данные пльзователя ' . $user['login'] . ' успешно обновлены!');
    }
}
