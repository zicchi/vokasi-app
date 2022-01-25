@extends('layouts.main')
@section('title')
    User
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin::dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin::users::create') }}" class="btn btn-primary mr-auto">Tambah User +</a>
                    <div class="card-header-action">
                        <form action="{{ route('admin::users::index') }}">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary text-white">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Jabatan</th>
                            <th>Fakultas</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->jabatan }}</td>
                                <td>{{ $user->fakultas }}</td>
                                <td>
                                    @if ($user->status == 100)
                                        <span class="badge badge-danger">Belum ambil hadiah</span>
                                    @elseif($user->status == 1)
                                        <span class="badge badge-warning">Pending</span>
                                    @else
                                        <span class="badge badge-success">Sudah ambil hadiah</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin::users::view', [hashid_encode($user->id, 'user')]) }}"
                                        class="btn btn-link">Rincian</a>
                                    @if ($user->status == \App\Models\User::STATUS_DEFAULT)
                                        <a href="javascript:"
                                            onclick="if(confirm('Hadiah {{ $user->name }} akan diambil')){$('#get-item-{{ $user->id }}').submit()}"
                                            class="btn btn-primary">Ubah Status</a>
                                        <form action="{{ route('api::index', [$user]) }}" method="get"
                                            class="hidden" id="get-item-{{ $user->id }}">
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{ $users->links() }}
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </section>
@endsection
