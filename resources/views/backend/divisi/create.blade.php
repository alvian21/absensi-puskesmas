@extends('backend.main')
@section('title', 'Divisi')
@section('divisi', 'class=active')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah | Divisi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header container-fluid  d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Tambah | Divisi</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.include.alert')
                            <form id="formKriteria" method="POST" action="{{route('divisi.store')}}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Divisi</label>
                                            <input type="text" class="form-control" id="nama" name="nama">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btnSimpan">Simpan</button>
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
        $(document).ready(function() {
        })
    </script>
@endpush
