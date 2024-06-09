<!DOCTYPE html>
<html lang="en">

    <x-head-Home></x-head-Home>
    <title>Not Found</title>
<body>
    <div class="container">
        <!-- BEGIN: Error Page -->
        <div
            class="error-page flex flex-col lg:flex-row items-center justify-center h-screen text-center lg:text-left">
            <div class="-intro-x lg:mr-20">
                <img alt="Midone - HTML Admin Template" class="h-48 lg:h-auto"
                    src="{{ asset('images/error-illustration.svg') }}">
            </div>
            <div class="text-white mt-10 lg:mt-0">
                <div class="intro-x text-8xl font-medium">404</div>
                <div class="intro-x text-xl lg:text-3xl font-medium mt-5">Oops. Page ini tidak ditemukan.</div>
                <div class="intro-x text-lg mt-3">Kembali kehalaman sebelumnya!!!
                </div>
                <button onclick="window.location.href = '/'" type="button"
                    class="intro-x btn py-3 px-4 text-white border-white dark:border-darkmode-400 dark:text-slate-200 mt-10">Kembali</button>
            </div>
        </div>
        <!-- END: Error Page -->
    </div>
</body>
</html>
