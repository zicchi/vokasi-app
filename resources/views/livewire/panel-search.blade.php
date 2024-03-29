<div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin::users::create') }}" class="btn btn-primary">Tambah User +</a>
            <a href="{{ route('admin::users::export') }}" class="btn btn-success ml-3 mr-auto">Export</a>
            <div class="card-header-action">
                <div class="input-group">
                    <label>
                        <input type="text" name="name" class="form-control" wire:model="query" placeholder="Search"
                            height="2rem">
                    </label>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Waktu Pengambilan</th>
                        <th scope="col">Merchandise</th>
                        <th scope="col">Action</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->jabatan }}</td>
                            <td>{{ $user->fakultas }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                @if ($user->status == 100)
                                    <span class="badge badge-danger">Belum Diambil</span>
                                @else
                                    <span class="badge badge-success">Sudah Diambil</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin::users::view', [hashid_encode($user->id, 'user')]) }}"
                                    class="btn btn-link">Rincian</a>
                                @if ($user->status == \App\Models\User::STATUS_DEFAULT)
                                    <a href="javascript:"
                                        onclick="if(confirm('Merchandise {{ $user->name }} akan diambil')){$('#get-item-{{ $user->id }}').submit()}"
                                        class="btn btn-primary">Konfirmasi</a>
                                    <form action="{{ route('api::index', [$user]) }}" method="get"
                                        class="hidden" id="get-item-{{ $user->id }}">
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer text-right mb-8">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                {{ $users->links() }}
            </ul>
        </nav>
    </div>
</div>
