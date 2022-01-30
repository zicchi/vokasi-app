@extends('layouts.main')
@section('title')
    @if ($admin->id)
        Edit {{ $admin->name }}
    @else
        Tambah User
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin::dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin::admins::index') }}">User</a></div>
                @if ($admin->id)
                    <div class="breadcrumb-item">Edit {{ $admin->name }}</div>
                @else
                    <div class="breadcrumb-item">Tambah User</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post"
                      action="{{ $admin->id ? route('admin::admins::update', [$admin]) : route('admin::admins::store') }}">
                    @csrf
                    @if ($admin->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" required="" value="{{ $admin->name }}">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required=""
                                   value="{{ $admin->username }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" {{ $admin->id ? '' : 'required' }}>
                            @if ($admin->id)
                                <span class="text-muted">Jangan diisi apapun jika tidak ingin dirubah</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" id="" class="form-control">
                                <option value="admin">Superadmin</option>
                                <option value="operator">Operator</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
