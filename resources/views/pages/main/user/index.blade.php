@extends('layouts.landing')
@section('title')
    DIENG VOKASI UNIVERSITAS BRAWIJAYA
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>
        <div class="section-body ">
            <div class="card">
                <div class="card-header-action">
                    <div class="card-header">
                        <ul class="mr-auto"></ul>
                        <form action="{{ route('list::index') }}">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control" placeholder="Search" width="1rem"
                                    height="2rem">
                                <div class="input-group-btn">
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
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if ($user->status == 100)
                                        <span class="badge badge-danger">Belum Diambil</span>
                                    @else
                                        <span class="badge badge-success">Sudah Diambil</span>

                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$user->id}}">Aw,
                                        yeah!</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
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
    @foreach($users as $user)
        <div class="modal fade" tabindex="100" role="dialog" id="exampleModal{{$user->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <dt>Nama</dt>
                        <dd>{{$user->name}}</dd>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{route('api::index',[$user])}}" class="btn btn-primary">Hadir</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
