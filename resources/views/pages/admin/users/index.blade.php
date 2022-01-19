@extends('layouts.main')
@section('title')
    User
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
        </div>

        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin::users::create')}}" class="btn btn-primary">Tambah User +</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>Name</th>
                                    <th>Poin</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->point}}</td>
                                            <td>
                                                @if($user->attended == false)
                                                    <span class="badge badge-danger">Belum Absen</span>
                                                @else
                                                    <span class="badge badge-success">Sudah Absen</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin::users::view',[hashid_encode($user->id,'user')])}}" class="btn btn-link">Rincian</a>
                                                @if($user->attended == false)
                                                    <a href="{{route('api::index',[$user])}}" target="_blank" class="btn btn-primary">Absen</a>
                                                @endif
                                            </td>
                                        </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{$users->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>



        </div>
    </section>
@endsection
