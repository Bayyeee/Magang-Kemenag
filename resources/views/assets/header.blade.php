<header class="bg-white sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Left section: Logo -->
        <div class="flex items-center">
            <img src="{{ asset('images/kemenagBanjar_logo.png') }}" alt="Logo" class="h-12 w-auto mr-52">
        </div>

        <!-- Hamburger menu (for mobile) -->
        <div class="flex md:hidden">
            <button id="hamburger" class="bg-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Center section: Menu -->
        <nav class="hidden md:flex md:flex-grow justify-center mx-96">
            <ul class="flex justify-center space-x-4 text-black">
                <li><a href="#home" class="hover:text-secondary font-bold">Beranda</a></li>
                <li><a href="#aboutus" class="hover:text-secondary font-bold">Profil</a></li>
                <li><a href="#portfolio" class="hover:text-secondary font-bold">Berita</a></li>
                <li><a href="#team" class="hover:text-secondary font-bold">Struktur</a></li>
                <li><a href="#contact" class="hover:text-secondary font-bold">Kontak</a></li>
            </ul>
        </nav>

        <!-- Right section: Buttons (for desktop) -->
        <div class="hidden lg:flex items-center space-x-4 -mx-32">
            <a href="#"
                class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block">Registrasi</a>
            <a href="#"
                class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block">Login</a>
        </div>
    </div>
</header>

<!-- Mobile menu -->
<nav id="mobile-menu-placeholder" class="mobile-menu hidden flex-col items-center space-y-8 md:hidden">
    <ul>
        <li><a href="#home" class="hover:text-secondary font-bold">Home</a></li>
        <li><a href="#aboutus" class="hover:text-secondary font-bold">About us</a></li>
        <li><a href="#results" class="hover:text-secondary font-bold">Results</a></li>
        <li><a href="#reviews" class="hover:text-secondary font-bold">Reviews</a></li>
        <li><a href="#portfolio" class="hover:text-secondary font-bold">Portfolio</a></li>
        <li><a href="#team" class="hover:text-secondary font-bold">Struktur</a></li>
        <li><a href="#contact" class="hover:text-secondary font-bold">Contact</a></li>
    </ul>
    <div class="flex flex-col mt-6 space-y-2 items-center">
        <a href="#"
            class="bg-secondary hover:bg-primary text-white font-semibold px-4 py-2 rounded inline-block items-center justify-center min-w-[110px]">Registrasi</a>
        <a href="#"
            class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block items-center justify-center min-w-[80px]">Login</a>
    </div>
</nav>