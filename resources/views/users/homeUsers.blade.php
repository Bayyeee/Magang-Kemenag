<!DOCTYPE html>
<html lang="en">
<x-head-Home></x-head-Home>

<body>
    {{-- TODO Main Content --}}
    {{-- TODO FOR MOBILE USERS --}}
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="#" class="flex mr-auto">
                <img alt="Kementerian Agama Kota Banjarmasin" class="w-10 rounded-lg"
                    src="{{ asset('images/kemenag_icon.png') }}">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="/" class="menu menu--active">
                        <div class="menu__icon"><i data-lucide="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                {{-- TODO PENDAFTARAN --}}
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title">
                            Pengajuan
                            <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('pendaftaran-users') }}" class="menu">
                                <div class="menu__icon"> <i data-lucide="book"></i> </div>
                                <div class="menu__title"> Pendaftaran </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('edit-pengajuan') }}" class="menu">
                                <div class="menu__icon"> <i data-lucide="edit-3"></i> </div>
                                <div class="menu__title"> Edit Pengajuan </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cek-verifikasi') }}" class="menu">
                                <div class="menu__icon"> <i data-lucide="file"></i> </div>
                                <div class="menu__title"> Cek Verifikasi </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cetak') }}" class="menu">
                                <div class="menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="menu__title"> Cetak Berkas </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- TODO DATA PEGAWAI --}}
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title">
                            Data Pegawai
                            <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('input-pegawai') }}" class="menu">
                                <div class="menu__icon"> <i data-lucide="upload"></i> </div>
                                <div class="menu__title"> Input Data Pegawai </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="menu">
                                <div class="menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="menu__title"> Cetak Data Pegawai </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- TODO DATA SISWA --}}
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title">
                            Data Siswa
                            <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="" class="menu">
                                <div class="menu__icon"> <i data-lucide="upload"></i> </div>
                                <div class="menu__title"> Input Data Siswa </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="menu">
                                <div class="menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="menu__title"> Kelas </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="menu">
                                <div class="menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="menu__title"> Cetak Data Siswa </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    {{-- TODO DESKTOP USERS --}}
    <div class="flex mt-[4.7rem] md:mt-0">
        <nav class="side-nav">
            {{-- TODO NAV USERS --}}
            <a href="#" class="intro-x flex items-center pt-4">
                <img alt="Kementerian Agama Kota Banjarmasin" class="w-10 rounded-lg"
                    src="{{ asset('images/kemenag_icon.png') }}">
                <span class="hidden xl:block text-white font-bold text-sm ml-3" style="font-size: 16px;"> Kementerian
                    Agama Kota Banjarmasin </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                {{-- TODO PENDAFTARAN --}}
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="side-menu__title">
                            Pengajuan
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('pendaftaran-users') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="book"></i> </div>
                                <div class="side-menu__title"> Pendaftaran </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('edit-pengajuan') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="edit-3"></i> </div>
                                <div class="side-menu__title"> Edit Pengajuan </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cek-verifikasi') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="file"></i> </div>
                                <div class="side-menu__title"> Cek Verifikasi </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cetak') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Cetak Berkas </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- TODO DATA PEGAWAI --}}
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title">
                            Data Pegawai
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('input-pegawai') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="upload"></i> </div>
                                <div class="side-menu__title"> Input Data Pegawai </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Cetak Data Pegawai </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- TODO DATA SISWA --}}
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title">
                            Data Siswa
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('show-Siswa') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="upload"></i> </div>
                                <div class="side-menu__title"> Input Data Siswa </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Kelas </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Cetak Data Siswa </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        @if (auth()->user()->usertpa && auth()->user()->usertpa->logo)
                            <img alt="User Photo" src="{{ asset('images/' . auth()->user()->usertpa->logo) }}">
                        @else
                            <img alt="Default Photo" src="{{ asset('images/user.png') }}">
                        @endif
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">
                                    @if (auth()->user()->usertpa)
                                        {{ auth()->user()->usertpa->nama_tpa }}
                                    @else
                                        {{ auth()->user()->email }}
                                    @endif
                                </div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">user</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ route('Profile') }}" class="dropdown-item hover:bg-white/5"> <i
                                        data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                        class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i
                                        data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5"> <i
                                        data-lucide="log-out" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            {{-- TODO ISI CONTENT --}}
            <div
                class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                <div class="mt-5 intro-x">
                    <div class="box zoom">
                        <div class="tiny-slider" id="important-notes">
                            <div class="h-64 px-2 p-2">
                                <div class="h-full image-fit rounded-md overflow-hidden"><img
                                        src="{{ asset('images/Kantor.png') }}" alt=""></div>
                            </div>
                            <div class="h-64 px-2 p-2">
                                <div class="h-full image-fit rounded-md overflow-hidden"><img
                                        src="{{ asset('images/Kantor.png') }}" alt=""></div>
                            </div>
                            <div class="h-64 px-2 p-2">
                                <div class="h-full image-fit rounded-md overflow-hidden"><img
                                        src="{{ asset('images/Kantor.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <!-- BEGIN: FAQ Menu -->
                <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
                    <i data-lucide="graduation-cap" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="font-medium text-center text-base mt-3">Sekolah TPA Terdaftar</div>
                    <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">
                        <h3 class="text-2xl font-bold text-primary counter" data-target-value="100">0</h3>
                    </div>
                </a>
                <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
                    <i data-lucide="send" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="font-medium text-center text-base mt-3">Data Ustadz/Ustadzah</div>
                    <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">
                        <h3 class="text-2xl font-bold text-primary counter" data-target-value="100">0</h3>
                    </div>
                </a>
                <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
                    <i data-lucide="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="font-medium text-center text-base mt-3">Data Santri</div>
                    <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">
                        <h3 class="text-2xl font-bold text-primary counter" data-target-value="100">0</h3>
                    </div>
                </a>
                {{-- TODO BERITA --}}
                <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-md box zoom-in" data-action="zoom"
                                src="{{ asset('images/berita1.png') }}">
                        </div>
                        <a href="" class="block font-medium text-base mt-5">ISI JUDUL KONTEN BERITA</a>
                        <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Delectus quo placeat accusamus, velit dolore eaque dolorum maiores, quae
                            eos magnam, asperiores modi ducimus facilis dignissimos maxime vitae? Totam, libero iusto.
                        </div>
                    </div>
                    <div class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                        <span
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip"
                            title="Humas"> <i data-lucide="users" class="w-3 h-3"></i> </span>
                        <span
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip"
                            title="06/07/2024"> <i data-lucide="calendar" class="w-3 h-3"></i> </span>
                        <a href=""
                            class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip"
                            title="" class="w-3 h-3"></> <i data-lucide="share-2" class="w-3 h-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");

            counters.forEach((counter) => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target-value");
                    const count = +counter.innerText;
                    const increment = target / 200;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 50);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        });
    </script>

    {{-- TODO Script --}}
    <x-script-Home></x-script-Home>
</body>

</html>
