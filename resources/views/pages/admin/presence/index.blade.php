@extends('layouts.main')
@section('title')
    Absensi
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
                    <div class="card-header-action">
                        <form action="{{ route('admin::presences::index') }}">
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
                            <th>Jam Absensi</th>
                        </tr>
                        @foreach ($presences as $presence)
                            <tr>
                                <td>{{ $presence->id }}</td>
                                <td>{{ $presence->user->name }}</td>
                                <td>{{ $presence->attend_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{ $presences->links() }}
                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </section>
@endsection
