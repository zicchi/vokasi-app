<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(User $user)
    {
        if ($user->attended == false){
            $user->attended = true;
            $user->save();

            return redirect(route('api::success',[hashid_encode($user->id,'user')]));
        }
        return redirect(route('api::check',[hashid_encode($user->id,'user')]));
    }

    public function success(User $user)
    {
        return view('web.success',[
            'user' => $user
        ]);
    }

    public function check(User $user)
    {
        return view('web.check',[
            'user' => $user
        ]);
    }
}
