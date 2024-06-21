<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>
<title>Edit Pengajuan</title>

<body>
    {{-- TODO Content --}}
    {{-- <x-editberkas-Users></x-editberkas-Users> --}}

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
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                        <div class="menu__title"> Calendar </div>
                    </a>
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
                    <a href="{{ route('Home') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu side-menu--active">
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
                            <a href="{{ route('edit-pengajuan') }}" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-lucide="edit-3"></i> </div>
                                <div class="side-menu__title"> Edit Pengajuan </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cek-verifikasi') }}" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="book"></i> </div>
                                <div class="side-menu__title"> Cek Verifikasi </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="side-menu__title"> File Manager </div>
                    </a>
                </li>

                <li>
                    <a href="side-menu-light-point-of-sale.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                        <div class="side-menu__title"> Point of Sale </div>
                    </a>
                </li>

                <li>
                    <a href="side-menu-light-chat.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                        <div class="side-menu__title"> Chat </div>
                    </a>
                </li>

                <li>
                    <a href="side-menu-light-post.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="side-menu__title"> Post </div>
                    </a>
                </li>

                <li>
                    <a href="side-menu-light-calendar.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                        <div class="side-menu__title"> Calendar </div>
                    </a>
                </li>

            </ul>
        </nav>
        {{-- TODO Content --}}
        <div class="content">
            <div class="top-bar">
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                </nav>
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
            </div>
            <h2 class="intro-y text-lg font-medium mt-3">
            </h2>
            <div class="grid grid-cols-12 gap-6 mt-5">
                {{-- TODO TOP CONTENT --}}
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <div class="flex w-full sm:w-auto">
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        <select class="w-48 xl:w-auto form-select box ml-2">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Proses</option>
                        </select>
                    </div>
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">NAMA BERKAS</th>
                                <th class="text-center whitespace-nowrap">JUMLAH</th>
                                <th class="text-center whitespace-nowrap">STATUS</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($berkas as $berkasItem)
                                <tr class="intro-x">
                                    <td>
                                        <a href="{{ asset($berkasItem->path) }}"
                                            class="font-medium whitespace-nowrap">{{ $berkasItem->tipeBerkas->tipe_berkas }}</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                            {{ $berkasItem->tipeBerkas->tipe_berkas }}</div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="w-40">
                                        @if ($berkasItem->pendaftaran->status_verifikasi == 'diverifikasi')
                                            <div class="flex items-center justify-center text-success">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Diverifikasi
                                            </div>
                                        @elseif ($berkasItem->pendaftaran->status_verifikasi == 'proses')
                                            <div class="flex items-center justify-center text-primary">
                                                <i data-lucide="loader" class="w-4 h-4 mr-2"></i> Proses
                                            </div>
                                        @else
                                            <div class="flex items-center justify-center text-danger">
                                                <i data-lucide="x-square" class="w-4 h-4 mr-2"></i> Ditolak
                                            </div>
                                        @endif
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;"
                                                data-tw-toggle="modal" data-tw-target="#edit-confirmation-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <form id="delete-form-{{ $berkasItem->id }}" action="{{ route('delete-pengajuan', $berkasItem->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center text-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus file ini?')">
                                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada berkas yang diunggah</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

            <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">
                                    Do you really want to delete these records?
                                    <br>
                                    This process cannot be undone.
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-tw-dismiss="modal"
                                    class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="button" class="btn btn-danger w-24">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- TODO script --}}
    <x-script-Home></x-script-Home>
</body>

</html>
