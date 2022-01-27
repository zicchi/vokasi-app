<div>
    <div class="card">
        <div class="card-header-action">
            <div class="card-header">
                    <div class="input-group">
                        <ul class="mr-auto"></ul>
                        <label>
                            <input type="text" name="name" class="form-control"  wire:model="query" placeholder="Search" height="2rem">
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
    </div>
    <div class="card-footer text-right mb-8">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                {{ $users->links() }}
            </ul>
        </nav>
    </div>
</div>
