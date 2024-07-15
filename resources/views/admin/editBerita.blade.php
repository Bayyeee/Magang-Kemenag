<!DOCTYPE html>
<html lang="en">

<x-head-Home></x-head-Home>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<body>
    {{-- TODO Main Admin --}}
    {{-- TODO BEGIN: Mobile Menu --}}
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="#" class="flex mr-auto">
                <img alt="Kementerian Agama Kota Banjarmasin" class="w-10 rounded-lg"
                    src="{{ asset('images/kemenag_icon.png') }}">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
    </div>

    {{--  TODO DESKTOP --}}
    <div class="flex mt-[4.7rem] md:mt-0">
        <nav class="side-nav">
            {{-- TODO NAV ADMIN --}}
            <a href="#" class="intro-x flex items-center pt-4">
                <img alt="Kementerian Agama Kota Banjarmasin" class="w-10 rounded-lg"
                    src="{{ asset('images/kemenag_icon.png') }}">
                <span class="hidden xl:block text-white font-bold text-sm ml-3" style="font-size: 16px;"> Kementerian
                    Agama Kota Banjarmasin </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="{{ route('homeAdmin') }}" class="side-menu -mt-5 hover:opacity-0">
                        <div class="side-menu__title font-semibold text-base">
                            Admin Fitur
                        </div>
                    </a>
                </li>
                <li class="side-nav__devider"></li>
                <li>
                    <a href="{{ route('homeAdmin') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                        <div class="side-menu__title">
                            Berkas
                            {{-- <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div> --}}
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('homeAdmin') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                        <div class="side-menu__title">
                            Users
                            {{-- <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div> --}}
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('show-Berita') }}" class="side-menu side-menu--active">
                        <div class="side-menu__icon"> <i data-lucide="tv"></i> </div>
                        <div class="side-menu__title">
                            Edit Berita
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        {{-- TODO PROFILE --}}
        <div class="content">
            <div class="top-bar">
                <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                </nav>
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{ asset('images/kemenag_icon.png') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary text-white">
                            <li class="p-2">
                                <div class="font-medium">{{ auth()->user()->nama }}</div>
                                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">
                                    {{ auth()->user()->role }}</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
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
            </div>
            {{-- TODO CONTENT BERITA --}}
            <div class="content">
                <div class="intro-y flex flex-col sm:flex-row items-center">
                    <h2 class="text-lg font-medium mr-auto">Daftar Berita</h2>
                    <div class="w-full sm:w-auto flex sm:mt-0">
                        <a href="javascript:;" class="btn btn-primary shadow-md mr-2 mt-10" data-tw-toggle="modal"
                            data-tw-target="#tambah-confirmation-modal">
                            <i class="w-4 h-4 mr-2" data-lucide="plus"></i>Tambah Berita
                        </a>
                    </div>
                </div>
                <div class="intro-y grid grid-cols-12 gap-6 mt-5">
                    @foreach ($berita as $item)
                        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                            <div
                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                                <div class="ml-3 mr-auto">
                                    <a href="" class="font-medium"></a>
                                    <div class="flex text-slate-500 truncate text-xs mt-0.5"></div>
                                </div>
                                <div class="dropdown ml-3">
                                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500"
                                        aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-vertical"
                                            class="w-4 h-4"></i> </a>
                                    <div class="dropdown-menu w-40">
                                        <ul class="dropdown-content">
                                            <li>
                                                <!-- Add data-berita-id attribute to the edit button -->
                                                <a href="javascript:;" class="dropdown-item" data-tw-toggle="modal"
                                                    data-tw-target="#edit-confirmation-modal"
                                                    data-berita-id="{{ $item->id_berita }}">
                                                    <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <form id="delete-form-{{ $item->id_berita }}" action="{{ route('hapus-berita', ['id' => $item->id_berita]) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <button onclick="confirmDelete({{ $item->id_berita }})" class="dropdown-item w-full">
                                                    <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete
                                                </button>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="h-40 2xl:h-56 image-fit">
                                    <img alt="" data-action="zoom" class="rounded-md zoom-in"
                                        src="{{ $item->fotoBerita->path }}">
                                </div>
                                <h2 class="block font-medium text-base mt-5">{{ $item->judul_berita }}</h2>
                                <div class="text-slate-600 dark:text-slate-500 mt-2">
                                    @if (strlen($item->isi_berita) > 50)
                                        <span id="isi-berita-short-{{ $item->id_berita }}"
                                            class="isi-berita-short">{{ substr($item->isi_berita, 0, 50) }}...</span>
                                        <span id="isi-berita-full-{{ $item->id_berita }}" class="isi-berita-full"
                                            style="display: none;">{{ $item->isi_berita }}</span>
                                        <a href="#" class="toggle-isi-berita text-primary"
                                            data-id="{{ $item->id_berita }}">Baca Selengkapnya</a>
                                    @else
                                        {{ $item->isi_berita }}
                                    @endif
                                </div>
                            </div>

                            <div
                                class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a href="#"
                                    class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip"
                                    title="{{ $item->user->nama }}"> <i data-lucide="users" class="w-3 h-3"></i>
                                </a>
                                <a href="#"
                                    class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip"
                                    title="{{ date('d M Y ', strtotime($item->waktu_upload)) }}">
                                    <i data-lucide="calendar" class="w-3 h-3"></i>
                                </a>
                                <a href=""
                                    class="intro-x w-8 h-8 flex items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto tooltip"
                                    title="Share"><i data-lucide="share-2" class="w-3 h-3"></i></a>
                            </div>
                        </div>
                    @endforeach

                    {{-- TODO MODAL EDIT --}}
                    <div id="edit-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="edit" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Edit Berita</div>
                                            <div class="text-slate-500 mt-2">Setiap Edit Akan di Record</div>
                                        </div>
                                        <div class="px-5 pb-8">
                                            <div class="form-group">
                                                <label for="edit_judul_berita">Judul Berita</label>
                                                <input type="text" id="edit_judul_berita" name="judul_berita"
                                                    class="form-control" placeholder="{{ $item->judul_berita }}"
                                                    maxlength="30" value="" required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="edit_isi_berita">Isi Berita</label>
                                                <textarea id="edit_isi_berita" name="isi_berita"
                                                    class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                                    placeholder="Isi Berita" maxlength="300" required>
                                                        {{ $item->isi_berita }}
                                                </textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="edit_foto">Upload Foto</label>
                                                <input type="file" id="edit_foto" name="foto"
                                                    class="border form-control" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal"
                                                class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                                            <button type="submit"
                                                class="btn btn-outline-primary w-24">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- TODO MODAL TAMBAH BERITA --}}
                    <div id="tambah-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="tambahForm" action="{{ route('tambah-berita') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="upload" class="w-16 h-16 text-success mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Tambah Berita</div>
                                            <div class="text-slate-500 mt-2">Setiap Tambah Berita Akan di Record</div>
                                        </div>
                                        <div class="px-5 pb-8">
                                            <div class="form-group">
                                                <label for="edit_judul_berita">Judul Berita</label>
                                                <input type="text" id="edit_judul_berita" name="judul_berita"
                                                    class="form-control" placeholder="Judul berita" maxlength="30"
                                                    required>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="edit_isi_berita">Isi Berita</label>
                                                <textarea id="edit_isi_berita" name="isi_berita"
                                                    class="form-control w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                                                    placeholder="Isi Berita" maxlength="300" required></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="edit_foto">Upload Foto</label>
                                                <input type="file" id="edit_foto" name="foto"
                                                    class="border form-control" accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal"
                                                class="btn btn-outline-secondary w-24 mr-1">Batal</button>
                                            <button type="submit"
                                                class="btn btn-outline-primary w-24">Simpan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll(
                '.dropdown-item[data-tw-target="#edit-confirmation-modal"]');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const beritaId = button.getAttribute('data-berita-id');
                    const form = document.getElementById('editForm');
                    form.action = `/update-berita/${beritaId}`;

                    fetch(`/edit-berita/${beritaId}`)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('edit_judul_berita').value = data
                                .judul_berita;
                            document.getElementById('edit_isi_berita').value = data.isi_berita;
                        });
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-isi-berita').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    let beritaId = this.getAttribute('data-id');
                    let shortContent = document.getElementById('isi-berita-short-' + beritaId);
                    let fullContent = document.getElementById('isi-berita-full-' + beritaId);
                    if (shortContent && fullContent) {
                        shortContent.style.display = 'none';
                        fullContent.style.display = 'inline';
                        this.style.display = 'none';
                    }
                });
            });
        });
    </script>



    {{-- TODO Script --}}
    <x-script-Home></x-script-Home>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Berita yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>

</body>

</html>
