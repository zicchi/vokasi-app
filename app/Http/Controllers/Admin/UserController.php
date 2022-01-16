<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('pages.admin.users.index',[
            'users' => $users
        ]);
    }

    public function create()
    {
        $user = new User();
        return view('pages.admin.users.form',[
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function edit(User $user)
    {
        return view('pages.admin.users.form',[
            'user' => $user
        ]);
    }

    public function view(User $user)
    {
        return view('pages.admin.users.view',[
            'user' => $user
        ]);
    }

    public function update(Request $request,User $user)
    {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin::users::index'));
    }
}
