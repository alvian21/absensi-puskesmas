@extends('backend.main')
@section('title', 'Laporan')
@section('laporan', 'class=active')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Laporan Absensi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header container-fluid  d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Laporan Absensi</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.include.alert')
                            <form id="formKriteria" method="POST" action="{{ route('laporan.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="periode_awal">Periode Awal</label>
                                            <input type="date" class="form-control" id="periode_awal"
                                                name="periode_awal">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="periode_akhir">Periode Akhir</label>
                                            <input type="date" class="form-control" id="periode_akhir"
                                                name="periode_akhir">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btnSimpan">Download</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {})
    </script>
@endpush
