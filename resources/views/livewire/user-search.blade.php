<div>
    <div class="card">
        <div class="card-header-action">
            <div class="card-header">
                <div class="input-group">
                    <ul class="mr-auto"></ul>
                    <label>
                        <input type="text" name="name" class="form-control" wire:model="query" placeholder="Search"
                            height="2rem">
                    </label>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered text-left">
                <tr>
                    <th style="width: 10px;">No</th>
                    <th scope="col" style="max-width: 200px">Nama & Jabatan</th>
                    {{-- <th scope="col">Status </th> --}}
                    <th scope="col">Aksi </th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>
                            <p class="mb-0 font-weight-bold">{{ $user->name }}</p>
                            <small>( {{ $user->jabatan }} )</small>

                        </td>

                        <td class="text-center">
                            {!! $user->status == 100 ? '<button class="btn btn-primary mb-2" data-toggle="modal"                                                                                                         data-target="#exampleModal' . $user->id . '"><i class="far fa-edit"></i></button> ' : '<button class="btn btn-success disabled"><i class="fas fa-check"></i></button>' !!}

                        </td>

                    </tr>
                @endforeach
            </table>
            {{-- <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    {{ $users->links() }}
                </ul>
            </nav> --}}
        </div>
    </div>

    <nav class="d-inline-block">
        <ul class="pagination flex-wrap">

            {{ $users->links() }}
        </ul>
    </nav>
    {{-- <div class="card-footer text-right mb-8">

    </div> --}}
</div>
