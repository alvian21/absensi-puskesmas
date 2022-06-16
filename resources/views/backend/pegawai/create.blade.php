@extends('backend.main')
@section('title', 'Pegawai')
@section('pegawai', 'class=active')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah | Pegawai</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header container-fluid  d-flex justify-content-between">
                            <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Tambah | Pegawai</h4>
                        </div>
                        <div class="card-body">
                            @include('backend.include.alert')
                            <form id="formKriteria" method="POST" action="{{ route('pegawai.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" readonly value="{{ $username }}" class="form-control"
                                                id="username" name="username">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" readonly value="{{ $password }}" class="form-control"
                                                id="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="divisi">Divisi</label>
                                            <select class="form-control" name="divisi" id="divisi">
                                                @forelse ($divisi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @empty
                                                @endforelse

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" required class="form-control" id="nama_lengkap"
                                                name="nama_lengkap">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" required name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="umur">Umur</label>
                                            <input type="number" min="10" required class="form-control"
                                                id="umur" name="umur">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" required name="alamat" id="alamat" rows="3"></textarea>
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
            $('#divisi').select2()
        })
    </script>
@endpush
