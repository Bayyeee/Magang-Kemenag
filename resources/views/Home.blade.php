<!DOCTYPE html>
<html lang="en" class="light">
    {{-- TODO head --}}
    <x-head-Home></x-head-Home>
    <title>Home</title>
    <!-- END: Head -->

    <body class="py-5" style="background-color: #198754">

        <x-nav-Home></x-nav-Home>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=[]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
