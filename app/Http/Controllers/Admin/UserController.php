<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $users = User::when($request->filled('name'), function ($q) {
            $q->where('name', 'like', "%" . \request()->input('name') . "%");
        })->paginate(10);
        return view('pages.admin.users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $user = new User();
        return view('pages.admin.users.form', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->jabatan = $request->input('jabatan');
        $user->fakultas = $request->input('fakultas');
        $user->status = $request->input('status');
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function edit(User $user)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        return view('pages.admin.users.form', [
            'user' => $user
        ]);
    }

    public function view(User $user)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        return view('pages.admin.users.view', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->jabatan = $request->input('jabatan');
        $user->fakultas = $request->input('fakultas');
        $user->status = $request->input('status');
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin::users::index'));
    }

    public function success(User $user)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $user->status = User::STATUS_SUCCESS;
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function pending(User $user)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $user->status = User::STATUS_PENDING;
        $user->save();

        return redirect(route('admin::users::index'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'merchandise.xlsx');
    }
}
