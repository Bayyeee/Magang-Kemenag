<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>


<body class="py-5">
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
                    <a href="{{ route('Home') }}" class="side-menu side-menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                        <div class="side-menu__title"> Profile </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                        <div class="side-menu__title">
                            Menu Layout
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="side-menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="side-menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                <div class="side-menu__title"> Top Menu </div>
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
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex"></nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        {{-- ! MASIH ERROR --}}
                        <img alt="" src="{{ asset(auth()->user()->logo) }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">{{ auth()->user()->email }}</div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">
                                    {{ auth()->user()->level }}</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ route('Profile') }}" class="dropdown-item hover:bg-white/5"><i
                                        data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                        class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle"
                                        class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5"> <i
                                        data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <div class="intro-y box p-4">
                <div class="intro-y flex items-center">
                    <h2 class="text-lg font-medium mr-auto">
                        Edit Profile
                    </h2>
                </div>
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('simpan-profile') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="intro-y box p-5 mt-3">
                        <div>
                            <label for="crud-form-1" class="form-label">Nama TPA</label>
                            <input id="nama_tpa" type="text" class="form-control w-full"
                                placeholder="Nama Sekolah" name="name">
                        </div>

                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label">Alamat</label>
                            <div class="input-group">
                                <input id="alamat" type="text" class="form-control" placeholder="Jln. ...."
                                    aria-describedby="input-group-1" name="alamat">
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="crud-form-3" class="form-label" for="file_input">Upload logo</label>
                            <div class="input-group rounded-lg">
                                <input
                                    class="form-control block w-full text-sm text-gray-dark border border-gray-dark rounded-lg cursor-pointer bg-gray-dark dark:text-gray-light focus:outline-none dark:bg-gray-lighter dark:border-gray-txt dark:placeholder-gray-light"
                                    id="logo" type="file" accept=".jpeg, .jpg, .png, .svg"
                                    onchange="validateFile(this)" name="logo">
                                <p id="error_message" class="text-red-500 text-sm mt-1"></p>
                            </div>
                        </div>
                        <div class="text-right mt-5">
                            <button onclick="window.location.href = '/'" type="button"
                                class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                            <button type="submit" class="btn btn-primary w-24">Save</button>
                        </div>
                </form>
                {{-- ?? END: Form Layout --}}
            </div>
            {{-- ?? END: Top Bar  --}}
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        {{-- ? CONTENT UTAMA --}}
                    </div>
                </div>
                <div class="col-span-12 2xl:col-span-3">
                    <div class="2xl:border-l -mb-10">
                        <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                            {{-- ? CONTENT BEBAS BERGARIS --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-script-Home></x-script-Home>

</body>

</html>
