<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') &dash; {{ 'Puskesmas' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/nestable/css/nestable.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.dateTime.min.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('backend.include.topnav')
            </nav>
            <div class="main-sidebar sidebar-style-2">
                @include('backend.include.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('backend.include.footer')
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nestable/js/jquery.nestable.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/js/socket.io.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    @include('backend.include.toastr')
    @stack('scripts')

    <script>
        function tampil_alert(data, status) {
            if (status == 'success') {
                iziToast.success({
                    title: 'Yeay!',
                    message: data,
                    position: 'topCenter'
                });
            } else if (status == 'info') {
                iziToast.info({
                    title: 'Hello!',
                    message: data,
                    position: 'topCenter'
                });
            } else if (status == 'error') {
                iziToast.error({
                    title: 'Auch!',
                    message: data,
                    position: 'topCenter'
                });
            } else if (status == 'warning') {
                iziToast.warning({
                    title: 'Warning!',
                    message: data,
                    position: 'topCenter'
                });
            }
        }

        function ajax() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    </script>
</body>

</html>
