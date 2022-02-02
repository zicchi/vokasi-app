<table>
    <thead>
    <tr class="font-weight-600">
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Fakultas</th>
        <th>Status</th>
        <th>Waktu Pengambilan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->jabatan }}</td>
            <td>{{ $user->fakultas }}</td>
            <td>
                {{$user->status == \App\Models\User::STATUS_SUCCESS ? 'Sudah diambil' : 'Belum diambil'}}
            </td>
            <td>{{ \Illuminate\Support\Carbon::parse($user->updated_at)->format('d M Y H:i:s') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
