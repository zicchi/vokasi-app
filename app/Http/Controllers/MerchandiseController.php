<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('pages.main.merchandise.index', [
            'users' => $users
        ]);
    }

    public function getMerchandise(User $user)
    {
        if ($user->status == User::STATUS_DEFAULT){
            $user->taken_by_user = true;
            $user->status = User::STATUS_SUCCESS;
            $user->save();

            $presence  = new Presence();
            $presence->user_id = $user->id;
            $presence->attend_at = now();
            $presence->save();

            return redirect(route('merch::success',[hashid_encode($user->id,'user')]));
        }
        return redirect(route('merch::check',[hashid_encode($user->id,'user')]));
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
