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
                                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>
                                        Ambil</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
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



        </div>
    </section>
@endsection
