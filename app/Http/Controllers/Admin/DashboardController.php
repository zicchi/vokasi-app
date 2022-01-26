<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('status',User::STATUS_SUCCESS)->count();
        return view('pages.admin.dashboard',[
            'users' => $users,
        ]);
    }

    public function resetAttendance()
    {
        return redirect(route('admin::dashboard'));
    }
}
