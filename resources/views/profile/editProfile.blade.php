<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>

<head>
    <style>
        .disabled {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
    </style>
</head>


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
                        {{-- ?? FIX --}}
                        @if (auth()->user()->usertpa && auth()->user()->usertpa->logo)
                            <img alt="User Photo" class="rounded-full"
                                src="{{ asset('images/' . auth()->user()->usertpa->logo) }}">
                        @else
                            <img alt="Default Photo" src="{{ asset('images/user.png') }}" class="rounded-full">
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
                {{-- ?? BEGIN: Form Layout --}}
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
                            <label for="crud-form-3" class="form-label">Nama Admin Operator</label>
                            <div class="input-group">
                                <input id="nama" type="text" class="form-control"
                                    placeholder="{{ Auth::user()->nama_admin }}" aria-describedby="input-group-1"
                                    name="nama" maxlength="30">
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="nip" class="block mb-1 text-sm text-gray-900 dark:text-dark">NIP</label>
                            <input type="text" name="nip" id="nip"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black disabled"
                                placeholder="{{ Auth::user()->nip }}"
                                disabled maxlength="18" />
                            <div>
                                <label class="block text-sm text-gray-900 dark:text-dark">Apakah Anda
                                    memiliki NIP?</label>
                                <input type="radio" id="has_nip_yes" name="has_nip" value="yes"
                                    class="mr-2">
                                <label for="has_nip_yes"
                                    class="text-sm text-gray-900 dark:text-black">Ya</label>
                                <input type="radio" id="has_nip_no" name="has_nip" value="no"
                                    class="ml-4 mr-2">
                                <label for="has_nip_no"
                                    class="text-sm text-gray-900 dark:text-dark">Tidak</label>
                            </div>
                        </div>

                        <div>
                            <label for="jenis_kelamin"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
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
                {{-- <div class="intro-y flex items-center">
                    <h2 class="text-lg font-medium mr-auto">
                        Profile Layout
                    </h2>
                </div>
                <!-- BEGIN: Profile Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <div
                        class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                @if (auth()->user()->usertpa && auth()->user()->usertpa->logo)
                                    <img alt="User Photo" class="rounded-full"
                                        src="{{ asset('images/' . auth()->user()->usertpa->logo) }}">
                                @else
                                    <img alt="Default Photo" src="{{ asset('images/user.png') }}"
                                        class="rounded-full">
                                @endif
                                <div
                                    class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                                    <i class="w-4 h-4 text-white" data-lucide="camera"></i>
                                </div>
                            </div>
                            <div class="ml-5">
                                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                                    @if (auth()->user()->usertpa)
                                        {{ auth()->user()->usertpa->nama_tpa }}
                                    @else
                                        {{ auth()->user()->email }}
                                    @endif
                                </div>
                                <div class="text-slate-500">User</div>
                            </div>
                        </div>
                        <div
                            class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="font-medium text-center lg:text-left lg:mt-3">Alamat</div>
                            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                                <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="map"
                                        class="w-4 h-4 mr-2"></i>
                                    @if (auth()->user()->usertpa)
                                        {{ auth()->user()->usertpa->alamat }}
                                    @else
                                        <div>Silahkan Perbarui Profile</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class=""></div>
                            <div class="">
                                <div class=""><span class=""></span> </div>
                                <div class="">
                                    <div class="h-[55px]">
                                        <canvas></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=""><span class=""></span> </div>
                                <div class="">
                                    <div class="h-[55px]">
                                        <canvas></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button onclick="window.location.href = '{{ route('editProfile') }}'" type="button" class="btn btn-primary w-24 mr-2"> <i data-lucide="edit"
                                class="w-4 h-4 mr-2"></i> Edit </button>
                        <button onclick="window.location.href = '/'" type="button" class="btn btn-secondary w-24"><i data-lucide="corner-up-left"
                            class="w-4 h-4 mr-2"></i> Kembali </button>
                    </div>
                </div> --}}
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

    <script>
        document.querySelectorAll('input[name="has_nip"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var nipInput = document.getElementById('nip');
                if (document.getElementById('has_nip_yes').checked) {
                    nipInput.disabled = false;
                    nipInput.classList.remove('disabled');
                } else {
                    nipInput.disabled = true;
                    nipInput.value = ''; // Clear the input field if disabled
                    nipInput.classList.add('disabled');
                }
            });
        });
        document.getElementById('nip').addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>

</body>

</html>
