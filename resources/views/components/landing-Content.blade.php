<section id="home" class="py-60 px-16" style="background-image: url({{ asset('images/kemenag_depan.png') }}); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <!-- Left column: Description and buttons -->
        <div class="md:w-2/4 p-5 text-center md:text-left mb-8 md:mb-0 bg-opacity-50 bg-black rounded-lg">
            <p class="my-2 text-white px-3 text-xl">Selamat Datang Disitus Resmi</p>
            <h2 class="text-4xl font-bold mt-3 text-white px-3"> <span class="" style="color: greenyellow">Kementerian Agama</span> Kota Banjarmasin</h2>
            <p class="my-7 mt-2 px-3 text-white">Bersih Melayani, Ikhlas Beramal</p>
        
            <form class="flex items-center max-w-xl mx-auto -mt-6 mb-2 p-3">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative flex-grow">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-b-primary block w-full pl-12 pr-14 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pencarian..." required />
                </div>
                <button type="submit"
                    class="p-3 ml-3 text-lg font-medium text-white bg-primary rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-black hover:opacity-70">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>
    </div>
</section>
