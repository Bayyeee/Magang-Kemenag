<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>

<body>

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
                                <div class="side-menu__icon"> <i data-lucide="book"></i> </div>
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
                    <a href="javascript:;" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title">
                            Data Pegawai
                            <div class="side-menu__sub-icon "><i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="" class="side-menu side-menu--active">
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
                            <a href="" class="side-menu">
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
            </div>
            {{-- TODO CONTENT --}}
            <h2 class="intro-y text-lg font-medium mt-5">
                Data Pegawai
            </h2>
            <div class="grid grid-cols-12 gap-6">
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap mt-5">
                    <a href="javascript:;" class="btn btn-primary shadow-md" data-tw-toggle="modal"
                        data-tw-target="#tambah-confirmation-modal">
                        <i class="w-4 h-4 mr-2" data-lucide="plus"></i>Tambah Data
                    </a>
                </div>
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-5">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Nama Pegawai</th>
                                <th class="text-center whitespace-nowrap">Jabatan</th>
                                <th class="text-center whitespace-nowrap">Jenis Kelamin</th>
                                <th class="text-center whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $pegawai)
                                <tr class="intro-x">
                                    <td>
                                        <a href=""
                                            class="font-medium whitespace-nowrap">{{ $pegawai->nama_pegawai }}</a>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                            {{ $pegawai->kelasTahunAjar->first()->kelas->nama_kelas }}
                                        </div>
                                    </td>
                                    <td>
                                        <a class="font-medium flex items-center justify-center"
                                            href="javascript:;">{{ $pegawai->jabatan }}</a>
                                    </td>
                                    <td>
                                        <div class="font-medium flex items-center justify-center">
                                            {{ $pegawai->jenis_kelamin }}</div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3 text-primary hover:text-gray-light edit-pegawai-btn"
                                                href="javascript:;" data-id="{{ $pegawai->id_pegawai }}"
                                                data-tw-toggle="modal" data-tw-target="#edit-confirmation-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger hover:text-opacity-70 delete-pegawai-btn"
                                                href="javascript:;" data-id="{{ $pegawai->id_pegawai }}"
                                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


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
                                    <button type="submit" class="btn btn-danger w-24">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- TODO ALERT UNTUK EDIT --}}
            <div id="edit-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="edit-form" action="" method="POST">
                            @csrf
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-lucide="edit" class="w-16 h-16 text-warning mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Edit Data Pegawai</div>
                                    <div class="text-slate-500 mt-2">Ubah data sesuai dengan informasi</div>
                                </div>
                                <div class="px-5 pb-8">
                                    <div class="form-group">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                        <input type="text" name="nama_pegawai" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" class="form-select" id="edit-jabatan" required>
                                            <option value="ustadz">Ustadz</option>
                                            <option value="ustadzah">Ustadzah</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                        <input type="text" name="jabatan_lainnya" id="edit-jabatan_lainnya"
                                            class="form-control mt-2" style="display: none;"
                                            placeholder="Jabatan Lainnya">
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
                                        <input type="text" name="nama_kelas" class="form-control" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="tahun_ajar">Tahun Ajar</label>
                                        <select name="tahun_ajar" class="form-select" required>
                                            <option value="semester ganjil">Semester Ganjil</option>
                                            <option value="semester genap">Semester Genap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                    <button type="submit" class="btn btn-outline-primary w-24">Ubah</button>
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
                        <form id="tambah-form" action="{{ route('simpan-pegawai') }}" method="POST">
                            @csrf
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-lucide="upload" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Silahkan tambahkan data</div>
                                    <div class="text-slate-500 mt-2">Tambahkan data sesuai dengan informasi</div>
                                </div>
                                <div class="px-5 pb-8">
                                    <div class="form-group">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                        <input type="text" name="nama_pegawai" class="form-control"
                                            placeholder="masukkan nama" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" class="form-select" id="jabatan"
                                            aria-placeholder="pilih" required>
                                            <option value="ustad">Ustadz</option>
                                            <option value="ustadzah">Ustadzah</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                        <input type="text" name="jabatan_lainnya" id="jabatan_lainnya"
                                            class="form-control mt-2" style="display: none;"
                                            placeholder="Jabatan Lainnya">
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
                                        <input type="text" name="nama_kelas" class="form-control"
                                            placeholder="masukkan nama kelas" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="tahun_ajar">Tahun Ajar</label>
                                        <select name="tahun_ajar" class="form-select" required>
                                            <option value="semester ganjil">Semester Ganjil</option>
                                            <option value="semester genap">Semester Genap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-tw-dismiss="modal"
                                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                    <button type="submit" class="btn btn-outline-primary w-24">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('edit-jabatan').addEventListener('change', function() {
            if (this.value === 'lainnya') {
                document.getElementById('edit-jabatan_lainnya').style.display = 'block';
            } else {
                document.getElementById('edit-jabatan_lainnya').style.display = 'none';
            }
        });

        // Display input field for "lainnya" if it was previously selected
        if (document.getElementById('edit-jabatan').value === 'lainnya') {
            document.getElementById('edit-jabatan_lainnya').style.display = 'block';
        }
    </script>

    {{-- TODO PAKAI AJAX BINGUNG DAH --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-pegawai-btn');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const pegawaiId = this.getAttribute('data-id');
                    fetch(`/pegawai/${pegawaiId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.querySelector('#edit-form').action =
                                `/update-pegawai/${data.id_pegawai}`;
                            document.querySelector('input[name="nama_pegawai"]').value = data
                                .nama_pegawai;
                            document.querySelector('select[name="jabatan"]').value = data
                                .jabatan;
                            document.querySelector('select[name="jenis_kelamin"]').value = data
                                .jenis_kelamin;
                            document.querySelector('input[name="nama_kelas"]').value = data
                                .kelas_tahun_ajar[0].kelas.nama_kelas;
                            document.querySelector('select[name="tahun_ajar"]').value = data
                                .kelas_tahun_ajar[0].tahun_ajar;

                            if (data.jabatan === 'lainnya') {
                                document.querySelector('input[name="jabatan_lainnya"]').style
                                    .display = 'block';
                                document.querySelector('input[name="jabatan_lainnya"]').value =
                                    data.jabatan_lainnya;
                            } else {
                                document.querySelector('input[name="jabatan_lainnya"]').style
                                    .display = 'none';
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            document.querySelector('#edit-jabatan').addEventListener('change', function() {
                if (this.value === 'lainnya') {
                    document.querySelector('#edit-jabatan_lainnya').style.display = 'block';
                } else {
                    document.querySelector('#edit-jabatan_lainnya').style.display = 'none';
                }
            });

            // Display input field for "lainnya" if it was previously selected
            if (document.querySelector('#edit-jabatan').value === 'lainnya') {
                document.querySelector('#edit-jabatan_lainnya').style.display = 'block';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tangkap event klik pada tombol hapus pegawai
            document.querySelectorAll('.delete-pegawai-btn').forEach(item => {
                item.addEventListener('click', function() {
                    // Ambil data ID pegawai dari atribut data-id
                    let pegawaiId = this.getAttribute('data-id');

                    // Set action pada form delete-confirmation-modal
                    let form = document.getElementById('delete-form');
                    form.action = '/hapus-pegawai/' + pegawaiId;
                });
            });
        });
    </script>


    <x-script-Home></x-script-Home>
</body>

</html>
