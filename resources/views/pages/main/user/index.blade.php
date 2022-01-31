@extends('layouts.landing')
@section('title')
    VOKASI UNIVERSITAS BRAWIJAYA
@endsection
@section('content')
    <div class="login-brand">
        @yield('title')
    </div>
    <section class="section mb-5">
        <div class="section-header">
            <h1>Data Undangan</h1>
        </div>
        <div class="section-body ">
            <livewire:user-search />
        </div>
    </section>
    @foreach ($users as $user)
        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal{{ $user->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Absensi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($user->status == 100)
                            <div class="alert alert-primary alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close pb-1" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <div id="message">
                                        Selamat datang <b>{{ $user->name }} </b>. Silahkan menunjukkan pesan ini ke
                                        panitia
                                        untuk mengambil merchandise.
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
                                        Terima kasih kepada <b>{{ $user->name }} </b>telah melakukan absensi, <br>
                                        silahkan ambil merchandise di booth selanjutnya.
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
                        <dt>Merchandise</dt>
                        <dd>
                            @if ($user->status == 100)
                                <span class="badge badge-danger">Belum Diambil</span>
                            @else
                                <span class="badge badge-success">Sudah Diambil</span>

                            @endif
                        </dd>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <a href="{{ route('api::index', [$user]) }}" class="btn btn-success">Hadir</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
