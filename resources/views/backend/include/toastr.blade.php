<script type="text/javascript">
    $(document).ready(function () {
        var success = '{{ Session::has('success') }}';
        var info = '{{ Session::has('info') }}';
        var error = '{{ Session::has('error') }}';
        var warning = '{{ Session::has('warning') }}';

        if (success) {
            iziToast.success({
                title: 'Yeay!',
                message: '{{ Session::get('success') }}',
                position: 'topCenter'
            });
        } else if (info) {
            iziToast.info({
                title: 'Hello!',
                message: '{{ Session::get('info') }}',
                position: 'topCenter'
            });
        } else if (error) {
            iziToast.error({
                title: 'Auch!',
                message: '{{ Session::get('error') }}',
                position: 'topCenter'
            });

        } else if (warning) {
            iziToast.warning({
                title: 'Caution!',
                message: '{{ Session::get('warning') }}',
                position: 'topCenter'
            });
        }
    });

</script>
