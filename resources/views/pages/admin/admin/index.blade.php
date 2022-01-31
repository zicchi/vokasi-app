@extends('layouts.main')
@section('title')
    Data Undangan
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
                    <a href="{{ route('admin::admins::create') }}" class="btn btn-primary mr-auto">Tambah User +</a>
                    <div class="card-header-action">
                        <form action="{{ route('admin::admins::index') }}">
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>
                                        <a href="{{ route('admin::admins::view', [hashid_encode($admin->id, 'user')]) }}"
                                            class="btn btn-link">Rincian</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{ $admins->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
