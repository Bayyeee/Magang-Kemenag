<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<title>Pengajuan Pendaftaran</title>

<body>
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
                {{-- <li>
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
                </li> --}}
                {{-- TODO DATA SISWA --}}
                {{-- <li>
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
                </li> --}}
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
                            <a href="{{ route('pendaftaran-users') }}" class="side-menu side-menu--active">
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
                            <a href="{{ route('cek-verifikasi') }}" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="file"></i> </div>
                                <div class="side-menu__title"> Cek Verifikasi </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cetak') }}" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Cetak Berkas </div>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- TODO DATA PEGAWAI --}}
                {{-- <li>
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
                </li> --}}
                {{-- TODO DATA SISWA --}}
                {{-- <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title">
                            Data Siswa
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="upload"></i> </div>
                                <div class="side-menu__title"> Input Data Siswa </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title"> Cetak Data Siswa </div>
                            </a>
                        </li>
                    </ul>
                </li> --}}
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
            {{-- TODO MAIN CONTENT --}}
            <div class="intro-y flex items-center mt-3">
                <h2 class="text-lg font-medium mr-auto">
                    Unggah Berkas
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-3">
                @if (!$verifikasiBerkas)
                    <div class="intro-y col-span-12 lg:col-span-5">
                        <div class="card box p-5">
                            <form id="pendaftaran-form" action="{{ route('post-pendaftaran') }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="mt-3">
                                    <label for="crud-form-2" class="form-label">Jenis Berkas</label>
                                    <select id="crud-form-2" name="tipe_berkas" class="tom-select w-full" required>
                                        <option value="Surat Permohonan TPQ">Surat Permohonan TPQ</option>
                                        <option value="Proposal pendirian TPQ">Proposal pendirian TPQ</option>
                                        <option value="SK Kepengurusan">SK Kepengurusan</option>
                                        <option value="Daftar Santri">Daftar Santri</option>
                                        <option value="Daftar Ustad/Ustadzah">Daftar Ustad/Ustadzah</option>
                                        <option value="Surat Rekomendasi KUA">Surat Rekomendasi KUA</option>
                                        <option value="Bukti Kegiatan">Bukti Kegiatan</option>
                                    </select>
                                    <label for="" class="form-label text-xs font-manrope text-danger">*Wajib
                                        diunggah</label>
                                </div>
                                <div class="mt-3">
                                    <label for="crud-form-3" class="form-label">Upload Berkas</label>
                                    <input id="crud-form-3" type="file" name="file"
                                        class="border form-control" placeholder="Input text" accept=".pdf" required>
                                    <label for="" class="form-label text-xs font-manrope">Pilih berkas (hanya
                                        menerima berkas PDF) maksimal 2Mb.</label>
                                </div>
                                <div class="text-left mt-3">
                                    <button type="button" onclick="confirmSubmit()"
                                        class="btn btn-success text-white font-semibold">
                                        <i class="mr-1" data-lucide="save"></i>
                                        Simpan Berkas
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="intro-y col-span-12 lg:col-span-5">
                        <div class="card box p-5">
                            <div class="alert alert-success">
                                Semua berkas telah diverifikasi. Anda tidak dapat mengunggah berkas baru.
                            </div>
                        </div>
                    </div>
                @endif
                <div class="intro-y col-span-12 lg:col-span-7">
                    <div class="card box p-5">
                        <div class="mb-3 text-xl font-bold text-success">
                            <div class="side-menu__icon"><i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title ms-7 -mt-6">
                                <h5>Daftar Berkas Terunggah</h5>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td>Nama TPA</td>
                                <td>
                                    @if (auth()->user()->usertpa)
                                        {{ auth()->user()->usertpa->nama_tpa }}
                                    @else
                                        {{ auth()->user()->email }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Jenjang</td>
                                <td>Taman Pendidikan Al-Qur`an (TPQ)</td>
                            </tr>
                        </table>
                        <table id="dt-riwayat" class="table table-striped table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th class="text-center w-1">No</th>
                                    <th class="text-center">Jenis - Nama Berkas</th>
                                    <th class="text-center">Tanggal Unggah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berkas as $berkasItem)
                                    <tr>
                                        <td align="center">{{ $loop->iteration }}</td>
                                        <td>{{ $berkasItem->tipeBerkas->tipe_berkas }}</td>
                                        <td align="center">
                                            {{ \Carbon\Carbon::parse($berkasItem->tipeBerkas->waktu_upload)->format('d/m/Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="intro-y tab-content mt-5">
                <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="intro-y box col-span-12 lg:col-span-12">
                            <div
                                class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base text-danger mr-auto">
                                    *Persyaratan Dan Langkah
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="tab-content">
                                    <div id="work-in-progress-new" class="tab-pane active" role="tabpanel"
                                        aria-labelledby="work-in-progress-new-tab">
                                        <div>
                                            <div class="flex">
                                                <div class="mr-auto text-xl">1. Silahkan Upload berkas sesuai dengan
                                                    pilihan
                                                    jenis berkas</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto text-xl">2. Jika terjadi salah upload file silahkan
                                                    timpa
                                                    file sesuai dengan jenis berkas</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto text-xl">3. Berkas yang diupload harus berformat
                                                    PDF</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto text-xl">4. Maximal ukuran berkas 2MB</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto text-xl">5. Template Berkas Bisa Didownload Difitur
                                                    Cetak
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="intro-y tab-content mt-5">
                <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="intro-y box col-span-12 lg:col-span-12">
                            <div
                                class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base text-danger mr-auto">
                                    *Persyaratan Dan Langkah
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="tab-content">
                                    <div id="work-in-progress-new" class="tab-pane active" role="tabpanel"
                                        aria-labelledby="work-in-progress-new-tab">
                                        <div>
                                            <div class="flex">
                                                <div class="mr-auto">1. Silahkan Upload berkas sesuai dengan pilihan
                                                    jenis berkas</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto">2. Jika terjadi salah upload file silahkan timpa
                                                    file sesuai dengan jenis berkas</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto">3. Berkas yang diupload harus berformat PDF</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mr-auto">4. Maximal ukuran berkas 2MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- TODO script Home --}}
    <x-script-Home></x-script-Home>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Pastikan data yang Anda masukkan sudah benar.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, simpan!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('pendaftaran-form').submit();
                }
            })
        }
    </script>

</body>

</html>
