@extends('backend.main')
@section('title', 'Absensi')
@section('absensi', 'class=active')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Absensi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header  container-fluid d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i>Absensi</h4>
                        </div>
                        <form action="{{ route('absensi.store') }}" method="post">
                            @csrf

                            <div class="card-body">
                                @include('backend.include.alert')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="Absensi Masuk">Absensi Masuk</option>
                                                <option value="Absensi Pulang">Absensi Pulang</option>
                                                <option value="Izin">Izin</option>
                                                <option value="Terlambat">Terlambat</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row_catatan">

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header  container-fluid d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i>Absensi</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-skor">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Status</th>
                                            <th>Catatan</th>
                                            <th>Jam</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($absensi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $minggu[\Carbon\Carbon::parse($item->jam)->dayOfWeek] }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->catatan }}</td>
                                                <td>{{ $item->jam }}</td>
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


            $('#status').on('change', function() {
                var status = $(this).find(':selected').val()

                if (status == 'Izin') {
                    var html = `<div class="col-md-12">
                        <textarea class="form-control" placeholder="Catatan Izin" id="exampleFormControlTextarea1" name="catatan" required rows="3"></textarea>
                        </div>`
                    $('.row_catatan').append(html)
                } else {
                    $('.row_catatan').empty()
                }
            })

        })
    </script>
@endpush
