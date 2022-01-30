<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $admins = Admin::paginate(10);
        return view('pages.admin.admin.index', [
            'admins' => $admins
        ]);
    }

    public function create()
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        $admin = new Admin();
        return view('pages.admin.admin.form', [
            'admin' => $admin
        ]);
    }

    public function store(Request $request)
    {

        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->password = bcrypt($request->input('password'));
        $admin->role = $request->input('role');
        $admin->username = $request->input('username');
        $admin->save();

        return redirect(route('admin::admins::index'));
    }

    public function edit(Admin $admin)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        return view('pages.admin.admins.form', [
            'admin' => $admin
        ]);
    }

    public function view(Admin $admin)
    {
        abort_if(auth('admin')->user()->role != 'admin',403,'Forbidden Access');
        return view('pages.admin.admins.view', [
            'admin' => $admin
        ]);
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->name = $request->input('name');
        if ($request->filled('password')){
            $admin->password = bcrypt($request->input('password'));
        }
        $admin->role = $request->input('role');
        $admin->username = $request->input('username');
        $admin->save();

        return redirect(route('admin::admins::index'));
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect(route('admin::admins::index'));
    }
}
