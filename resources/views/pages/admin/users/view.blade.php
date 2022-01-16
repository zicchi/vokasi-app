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
                            <dt>ID</dt>
                            <dd>#{{$user->id}}</dd>
                            <dt>Nama</dt>
                            <dd>{{$user->name}}</dd>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
{{--                    {!! SimpleSoftwareIO\QrCode\Facades\QrCode::format('svg')->size(300)->generate('MyNotePaper',public_path('QR/'.$user->id.'.png')); !!}--}}
                    {!! SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->generate('MyNotePaper'); !!}
                </div>
            </div>
        </div>
    </section>
@endsection
