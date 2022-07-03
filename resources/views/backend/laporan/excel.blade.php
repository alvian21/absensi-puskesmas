<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Status</th>
            <th>Jam</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($absensi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pegawai->nama_lengkap }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->catatan }}</td>
                <td>{{ $item->jam }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
