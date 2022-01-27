@extends('layouts.blank')
@section('title')
    Sukses !
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <img src="{{ asset('assets/logo/ub.png') }}" alt="logo-ub" style="margin-top: 2rem; display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                    width: 20%;">
                <div class="login-brand">
                    Fakultas Vokasi Universitas Brawijaya
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Check Status <i class="fas fa-user"></i></h4>
                    </div>

                    <div class="card-body">
                        <dt>Nama</dt>
                        <dd>{{ $user->name }}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{ $user->jabatan }}</dd>
                        <dt>Fakultas</dt>
                        <dd>{{ $user->fakultas }}</dd>
                        <dt>Merchandise</dt>
                        <dd>
                            @if ($user->attended == false)
                                <span class="badge badge-danger">Belum Ambil</span>
                            @else
                                <span class="badge badge-success">Sudah Ambil</span>
                            @endif
                        </dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
