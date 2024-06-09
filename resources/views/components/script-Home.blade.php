<!-- BEGIN: JS Assets-->
<script src="{{ asset('dist/js/app.js') }}"></script>
<!-- END: JS Assets-->

{{-- ** Function --}}
<script>
    function validateFile(input) {
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(input.value)) {
            document.getElementById('error_message').innerText = 'Hanya file dengan ekstensi JPG, JPEG, atau PNG yang diperbolehkan';
            input.value = '';
            return false;
        } else {
            document.getElementById('error_message').innerText = '';
        }
    }
</script>
