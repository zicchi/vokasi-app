@extends('layouts.blank')
@section('title')
    Sukses !
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="login-brand">
                    Fakultas Vokasi Universitas Brawijaya
                </div>

                <div class="card card-primary">
                    <div class="card-header"><h4>Sukses Check Kehadiran <i class="fas fa-check"></i></h4></div>

                    <div class="card-body">
                        <dt>Nama</dt>
                        <dd>{{$user->name}}</dd>
                        <dt>Poin</dt>
                        <dd>{{$user->point}}</dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

