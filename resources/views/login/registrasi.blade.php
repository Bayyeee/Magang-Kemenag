<!DOCTYPE html>
<html lang="en">

<x-headHtml></x-headHtml>
<head>
    <title>Registrasi</title>
</head>

<body>
    <section id="#" class="py-40 px-16"
        style="background-image: url({{ asset('images/kemenag_depan.png') }}); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Left column: Description and buttons -->
            <div class="md:w-2/4 p-5 text-center md:text-left mb-8 md:mb-0 bg-opacity-50 bg-black rounded-lg">
                <h2 class="text-4xl font-bold mt-3 text-white "> <span class=""
                        style="color: greenyellow">Kementerian Agama</span> Kota Banjarmasin</h2>
                <p class="my-7 mt-2 text-white">Bersih Melayani, Ikhlas Beramal</p>
                <form class="space-y-6" action="{{ route('postregistrasi') }}" method="POST">
                    {{ csrf_field() }}
                    <h5 class="text-2xl font-bold text-gray-900 dark:text-white -mb-5">Registrasi</h5>
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email User</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black""
                            placeholder="email@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Masukkan Password
                            </label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                    <button onclick="window.location.href = '/login'" type="button" class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-white">
                        Sudah Memiliki Akun? <a href="{{url('login')}}"
                            class="hover:underline hover:text-primary ">Login</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>
