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
            </div>
        </div>

    {{-- TODO Script --}}
    <x-script-Home></x-script-Home>
</body>
</html>
