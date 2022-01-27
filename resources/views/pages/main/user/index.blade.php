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
            <div class="card">
                <div class="card-header-action">
                    <div class="card-header">
                        <ul class="mr-auto"></ul>
                        <form action="{{ route('list::index') }}">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control" placeholder="Search" height="2rem">
                                <div class="input-group-btn ml-2">
                                    <button class="btn btn-primary text-white">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Merchandise</th>
                            <th scope="col">Action</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->jabatan }}</td>
                                <td>{{ $user->fakultas }}</td>
                                <td>
                                    @if ($user->status == 100)
                                        <span class="badge badge-danger">Belum Diambil</span>
                                    @else
                                        <span class="badge badge-success">Sudah Diambil</span>

                                    @endif
                                </td>
                                <td>
                                    @if ($user->status == 100)
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal{{ $user->id }}">
                                            Konfirmasi</button>
                                    @else
                                        <button class="btn btn-secondary">Konfirmasi</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card-footer text-right mb-8">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        {{ $users->appends([
                                'name' => request()->input('name'),
                            ])->links() }}
                    </ul>
                </nav>
            </div>
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
