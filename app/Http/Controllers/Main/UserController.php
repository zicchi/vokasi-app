<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        return view('pages.main.user.index', [
            'users' => $users
        ]);
    }

    public function pending(User $user)
    {
        $user->status = User::STATUS_PENDING;
        $user->save();

        return redirect(route('admin::users::index'));
    }
}
