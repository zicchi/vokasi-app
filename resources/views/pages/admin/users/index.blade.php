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
                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                    @if($user->role != 'superadmin')
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->point}}</td>
                                            <td>
                                                <a href="{{route('admin::users::view',[$user])}}" class="btn btn-link">Rincian</a>
                                                <a href="{{route('admin::users::edit',[$user])}}" class="btn btn-info">Update</a>
                                                <a href="javascript:;" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$user->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                                <form action="{{ route('admin::users::destroy', [$user]) }}" method="post" class="hidden" id="delete-item-{{ $user->id }}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
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
