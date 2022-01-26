@extends('layouts.main')
@section('title')
    @if ($user->id)
        Edit {{ $user->name }}
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
                <div class="breadcrumb-item active"><a href="{{ route('admin::users::index') }}">User</a></div>
                @if ($user->id)
                    <div class="breadcrumb-item">Edit {{ $user->name }}</div>
                @else
                    <div class="breadcrumb-item">Tambah User</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post"
                    action="{{ $user->id ? route('admin::users::update', [$user]) : route('admin::users::store') }}">
                    @csrf
                    @if ($user->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" required="" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required=""
                                value="{{ $user->username }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" {{ $user->id ? '' : 'required' }}>
                            @if ($user->id)
                                <span class="text-muted">Jangan diisi apapun jika tidak ingin dirubah</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required=""
                                value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="jabatan" class="form-control" name="jabatan" required=""
                                value="{{ $user->jabatan }}">
                        </div>
                        <div class="form-group">
                            <label>Fakultas</label>
                            <input type="fakultas" class="form-control" name="fakultas" value="{{ $user->fakultas }}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control" name="status">
                                    @if ($user->status == 100)
                                        <option value="100">Belum Absen</option>
                                        <option value="2">Sudah Absen</option>
                                    @else
                                        <option value="2">Sudah Absen</option>
                                        <option value="100">Belum Absen</option>
                                    @endif
                                </select>
                            </div>
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
