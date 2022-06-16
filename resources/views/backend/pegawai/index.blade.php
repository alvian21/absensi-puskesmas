@extends('backend.main')
@section('title', 'Pegawai')
@section('pegawai', 'class=active')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pegawai</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header  container-fluid d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Master | Pegawai</h4>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah
                                        Data</a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-skor">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pegawai as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $item->username }}
                                                </td>
                                                <td>
                                                    {{ $item->password }}
                                                </td>
                                                <td>
                                                    {{ $item->nama_lengkap }}
                                                </td>
                                                <td>
                                                    {{ $item->divisi->nama }}
                                                </td>
                                                <td>
                                                    {{ $item->umur }}
                                                </td>
                                                <td>
                                                    {{ $item->jenis_kelamin }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('pegawai.edit', [$item->id]) }}"
                                                        class="btn btn-info btnEdit">Edit</a>
                                                </td>
                                            </tr>

                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#table-skor').DataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "initComplete": function(settings, json) {
                    $("#table-skor").wrap(
                        "<div style='overflow:auto; width:100%;position:relative;'></div>");
                },
            });

        })
    </script>
@endpush
