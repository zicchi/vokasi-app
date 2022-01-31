@extends('layouts.blank')
@section('title')
    Sukses !
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">

                <img src="{{ asset('assets/logo/ub.png') }}" alt="logo-ub"
                    style="margin-top: 2rem; display: block;
                                                                                                                                                                            margin-left: auto;
                                                                                                                                                                            margin-right: auto;
                                                                                                                                                                            width: 20%;">
                <div class="login-brand">
                    Vokasi Universitas Brawijaya
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Sukses Check Kehadiran <i class="fas fa-check"></i></h4>
                    </div>
                    <div class="card-body">
                        @if ($user->status == 100)
                            <div class="alert alert-primary alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close pb-1" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <div id="message">
                                        Saat ini <b>{{ $user->name }} </b>belum mengambil merchandise, <br> silahkan click
                                        tombol
                                        hadir
                                        untuk mendapatkan merchandise.
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close pb-1" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <div id="message">
                                        Terima Kasih <b>{{ $user->name }} </b> kehadirannya dalam Peresmian Fakultas dan
                                        Gedung Vokasi Universitas Brawijaya.
                                        <br>
                                        Silahkan mengambil merchandise di booth selanjutnya.
                                    </div>
                                </div>
                            </div>
                        @endif
                        <dt>Nama</dt>
                        <dd>{{ $user->name }}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{ $user->jabatan }}</dd>
                        <dt>Fakultas</dt>
                        <dd>{{ $user->fakultas }}</dd>
                        <dt>Status</dt>
                        <dd>
                            @if ($user->status == 100)
                                <span class="badge badge-danger">Belum Diambil</span>
                            @else
                                <span class="badge badge-success">Sudah Diambil</span>

                            @endif
                        </dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center pb-5">
        <a href="{{route('list::index')}}"><i class="fas fa-long-arrow-alt-left"></i><b> Back To Homepage</b></a>
    </div>
    <script>
        function pageRedirect() {
            window.location.replace("{{route('list::index')}}");
        }
        setTimeout("pageRedirect()", 15000);
    </script>
@endsection
