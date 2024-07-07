<!DOCTYPE html>
<html lang="en">
<x-head-Home></x-head-Home>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <x-head-Home></x-head-Home>

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

        {{-- TODO UNTUK DESKTOP --}}
        <div class="flex mt-[4.7rem] md:mt-0">
            <nav class="side-nav">
                {{-- TODO NAV USERS --}}
                <a href="#" class="intro-x flex items-center pt-4">
                    <img alt="Kementerian Agama Kota Banjarmasin" class="w-10 rounded-lg"
                        src="{{ asset('images/kemenag_icon.png') }}">
                    <span class="hidden xl:block text-white font-bold text-sm ml-3" style="font-size: 16px;">
                        Kementerian
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
                                <div class="side-menu__sub-icon "><i data-lucide="chevron-down"></i> </div>
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
                        <a href="javascript:;" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                            <div class="side-menu__title">
                                Data Siswa
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('show-Siswa') }}" class="side-menu side-menu--active">
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
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                    </nav>
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
                </div>
                {{-- TODO CONTENT --}}
                <h2 class="intro-y text-lg font-medium mt-5">
                    Data Siswa
                </h2>
                <div class="grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <a href="javascript:;" class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                            data-tw-target="#tambah-confirmation-modal">
                            <i class="w-4 h-4 mr-2" data-lucide="plus"></i>Tambah Data
                        </a>
                        <div>
                            <a href="javascript:;" class="btn btn-primary shadow-md mr-2" data-tw-toggle="modal"
                                data-tw-target="#uploadexcel-confirmation-modal">
                                <i class="w-4 h-4 mr-2" data-lucide="upload"></i> Upload Excel
                            </a>
                        </div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <a href="{{ route('export-pegawai') }}" class="btn btn-primary shadow-md mr-2">
                                <i class="w-4 h-4 mr-2" data-lucide="download"></i> Download Data Excel
                            </a>
                        </div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-5">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Nama Siswa</th>
                                    <th class="text-center whitespace-nowrap">Nomor Identitas</th>
                                    <th class="text-center whitespace-nowrap">Jenis Kelamin</th>
                                    <th class="text-center whitespace-nowrap">Nama Kelas</th>
                                    <th class="text-center whitespace-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $filteredSiswas = $siswas->filter(function ($siswa) {
                                        return $siswa->kelasTahunAjar->pegawai->tpa->id_users == Auth::user()->id;
                                    });
                                @endphp
                                @if ($filteredSiswas->isEmpty())
                                    <tr class="intro-x">
                                        <td colspan="5" class="text-center">Tidak ada data siswa yang diunggah</td>
                                    </tr>
                                @else
                                    @foreach ($filteredSiswas as $siswa)
                                        <tr class="intro-x">
                                            <td class="">{{ $siswa->nama_siswa }}</td>
                                            <td class="text-center">{{ $siswa->nomor_identitas }}</td>
                                            <td class="text-center">{{ $siswa->jenis_kelamin }}</td>
                                            <td class="text-center">{{ $siswa->kelasTahunAjar->kelas->nama_kelas }}
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                                    {{ $siswa->kelasTahunAjar->pegawai->nama_pegawai }}
                                                </div>
                                            </td>
                                            <td class="table-report__action w-56">
                                                <div class="flex justify-center items-center">
                                                    <a href="javascript:;" data-tw-toggle="modal"
                                                        data-tw-target="#edit-confirmation-modal-{{ $siswa->id_siswa }}"
                                                        class="flex items-center mr-3 text-primary hover:text-gray-light">
                                                        <i class="w-4 h-4 mr-1" data-lucide="check-square"></i> Edit
                                                    </a>
                                                    <a href="javascript:;" data-tw-toggle="modal"
                                                        data-id="{{ $siswa->id_siswa }}"
                                                        data-tw-target="#delete-confirmation-modal"
                                                        class="flex items-center text-danger hover:text-opacity-70 delete-siswa-btn">
                                                        <i class="w-4 h-4 mr-1" data-lucide="trash-2"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- TODO ALERT UNTUK EDIT --}}
                @foreach ($siswas as $siswa)
                    <div id="edit-confirmation-modal-{{ $siswa->id_siswa }}" class="modal" tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="edit-form" action="{{ route('edit-siswa', $siswa->id_siswa) }}"
                                    method="POST">
                                    @csrf
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="edit" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Edit Data Siswa</div>
                                            <div class="text-slate-500 mt-2">Ubah data sesuai dengan informasi</div>
                                        </div>
                                        <div class="px-5 pb-8">
                                            <div class="form-group">
                                                <label for="nama_pegawai">Nama Siswa</label>
                                                <input type="text" name="nama_siswa" class="form-control"
                                                    placeholder="Masukkan Nama" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="nomor_identitas">Nomor Identitas</label>
                                                <input type="text" name="nomor_identitas" class="form-control"
                                                    maxlength="8" placeholder="Masukkan Nomor" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-select" required>
                                                    <option value="laki-laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="nama_kelas">Nama Kelas</label>
                                                <select name="id_kelas_tahun_ajar" class="tom-select w-full"
                                                    id="nama_kelas" data-placeholder="Pilih Kelas" required>
                                                    @foreach ($kelas_tahun_ajar as $kelas)
                                                        @if (
                                                            $kelas->pegawai->tpa->id_users == Auth::user()->id &&
                                                                ($kelas->pegawai->jabatan === 'ustadz' || $kelas->pegawai->jabatan === 'ustadzah'))
                                                            <option value="{{ $kelas->id_kelas_tahun_ajar }}">
                                                                {{ $kelas->kelas->nama_kelas }} -
                                                                {{ $kelas->pegawai->nama_pegawai }} -
                                                                {{ $kelas->tahunAjar->tahun_ajar }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <input type="text" name="kelas_lainnya" id="kelas_lainnya"
                                                    class="form-control mt-2" style="display: none;"
                                                    placeholder="Nama Kelas Lainnya">
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal"
                                                class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                                            <button type="submit" class="btn btn-outline-primary w-24">Ubah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- TODO ALERT UNTUK DELETE --}}
                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="delete-form" action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Yakin untuk hapus data?</div>
                                        <div class="text-slate-500 mt-2">
                                            <br>
                                            Data yang dihapus tidak bisa di kembalikan.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                                        <button type="submit" class="btn btn-danger w-24">Hapus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- TODO ALERT UNTUK TAMBAH DATA --}}
                <div id="tambah-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('simpan-siswa') }}" method="POST">
                                @csrf
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="upload" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Silahkan Tambahkan Data</div>
                                        <div class="text-slate-500 mt-2">Tambahkan Data Sesuai Dengan Informasi</div>
                                    </div>
                                    <div class="px-5 pb-8">
                                        <div class="form-group">
                                            <label for="nama_siswa">Nama Siswa</label>
                                            <input type="text" name="nama_siswa" class="form-control"
                                                placeholder="Masukkan Nama" id="nama_siswa" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="nomor_identitas">Nomor Identitas</label>
                                            <input type="text" id="nomor_identitas" name="nomor_identitas"
                                                class="form-control" maxlength="8" placeholder="Masukkan Nomor"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select"
                                                required>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="kelas_tahun_ajar">Kelas</label>
                                            <select name="id_kelas_tahun_ajar" class="tom-select w-full" required>
                                                @foreach ($kelas_tahun_ajar as $kelas)
                                                    @if (
                                                        $kelas->pegawai->tpa->id_users == Auth::user()->id &&
                                                            ($kelas->pegawai->jabatan === 'ustadz' || $kelas->pegawai->jabatan === 'ustadzah'))
                                                        <option value="{{ $kelas->id_kelas_tahun_ajar }}">
                                                            {{ $kelas->kelas->nama_kelas }} -
                                                            {{ $kelas->pegawai->nama_pegawai }} -
                                                            {{ $kelas->tahunAjar->tahun_ajar }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                                        <button type="submit" class="btn btn-outline-primary w-24">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- TODO ALERT UNTUK TAMBAH DATA EXCEL --}}
                <div id="uploadexcel-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="upload-form" action="{{ route('impor-pegawai') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-lucide="upload" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">TAMBAHKAN DATA MENGGUNAKAN EXCEL</div>
                                        <div class="text-slate-500 mt-2"></div>
                                    </div>
                                    <div class="px-5 pb-8">
                                        <div class="form-group">
                                            <label for="file">Upload File Excel</label>
                                            <input type="file" name="file" class="border form-control"
                                                accept=".xlsx" required>
                                        </div>
                                        <div class="px-5 pb-8 text-center mt-3">
                                            <button type="button" data-tw-dismiss="modal"
                                                class="btn btn-outline-secondary w-24 mr-1">Kembali</button>
                                            <button type="submit"
                                                class="btn btn-outline-primary w-24">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        {{-- TODO JEES DELETE DOM --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.delete-siswa-btn').forEach(item => {
                    item.addEventListener('click', function() {
                        let siswaiId = this.getAttribute('data-id');
                        let form = document.getElementById('delete-form');
                        form.action = '/delete-siswa/' + siswaiId;
                    });
                });
            });
        </script>

        <x-script-Home></x-script-Home>
    </body>

    </html>
</body>

</html>
