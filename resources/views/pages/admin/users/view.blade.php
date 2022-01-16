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
                <div class="breadcrumb-item active"><a href="{{route('admin::users::index')}}">user</a></div>
                <div class="breadcrumb-item">{{$user->name}}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <dt>ID Produk</dt>
                            <dd>#{{$user->id}}</dd>
                            <dt>Nama Produk</dt>
                            <dd>{{$user->name}}</dd>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {!! SimpleSoftwareIO\QrCode\Facades\QrCode::format('png')->size(300)->backgroundColor(255,255,0)->generate('MyNotePaper'); !!}
                </div>
            </div>
        </div>
    </section>
@endsection
