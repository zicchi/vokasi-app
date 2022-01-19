@extends('layouts.main')
@section('title')
    {{$user->name}}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::users::index')}}">User</a></div>
                <div class="breadcrumb-item">{{$user->name}}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="btn-lg my-2">
                <a href="{{route('admin::users::edit',[$user])}}" class="btn btn-info">Update</a>
                <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$user->id}}').submit()};" class="btn btn-danger">Hapus</a>
                <form action="{{ route('admin::users::destroy', [$user]) }}" method="post" class="hidden" id="delete-item-{{ $user->id }}">
                    @csrf
                    @method('delete')
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <dt>ID</dt>
                            <dd>#{{$user->id}}</dd>
                            <dt>Nama</dt>
                            <dd>{{$user->name}}</dd>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img alt="" src="data:image/png;base64, {!! base64_encode(SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(300)->generate(route('admin::users::attend',[hashid_encode($user->id,'user')]))) !!} ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
