<!DOCTYPE html>
<html lang="en">

<x-head-Landing></x-head-Landing>

<head>
    <title>Verifikasi Code</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .disabled {
            background-color: #e9ecef;
            cursor: not-allowed;
        }

        /* Toast styling */
        #toast {
            visibility: hidden;
            min-width: 300px;
            max-width: 500px;
            background-color: #fff;
            color: #333;
            text-align: center;
            border-radius: 5px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            top: 30px;
            transform: translateX(-50%);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 5.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                top: 0;
                opacity: 0;
            }

            to {
                top: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                top: 0;
                opacity: 0;
            }

            to {
                top: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                top: 30px;
                opacity: 1;
            }

            to {
                top: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                top: 30px;
                opacity: 1;
            }

            to {
                top: 0;
                opacity: 0;
            }
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
            transition: transform 0.3s ease;
        }

        .toggle-password.open {
            transform: translateY(-50%) rotate(0deg);
        }

        .toggle-password.closed {
            transform: translateY(-50%) rotate(180deg);
        }
    </style>
</head>

<body>
    <section id="your-section-id" class="py-24"
        style="background-image: url({{ asset('images/kemenag_depan.png') }}); background-size: cover; background-position: center center; background-repeat: no-repeat; width: 100vw; height: 100vh;">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between mt-10">
            <!-- Kolom Kiri: Deskripsi dan Tombol -->
            <div class="md:w-2/4 p-5 text-center md:text-left mb-8 md:mb-0 bg-opacity-50 bg-black rounded-lg mt-10">
                <h2 class="text-4xl font-bold mt-3 text-white"><span style="color: greenyellow">Kementerian Agama</span>
                    Kota Banjarmasin</h2>
                <p class="my-7 mt-2 text-white">Bersih Melayani, Ikhlas Beramal</p>
                <form class="space-y-6" method="POST" action="{{ route('verifikasiRegistrasi') }}">
                    {{ csrf_field() }}
                    <h5 class="text-2xl font-bold text-gray-900 dark:text-white">Verifikasi Code</h5>
                    <div>
                        <label for="verification_code"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Verifikasi Code</label>
                        <input type="text" name="verification_code" id="verification_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                            placeholder="Masukkan Verifikasi Code"/>
                        {{-- <div class="text-sm font-medium text-gray-500 dark:text-white mt-2 mb-2">Kirim Ulang Code?
                            <form action="{{ route('kirim_ulang') }}" method="POST" class="inline" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="submit" class="hover:underline hover:text-primary">Kirim</button>
                            </form>
                        </div> --}}
                        <button type="submit"
                            class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">Verifikasi</button>
                        <button onclick="window.location.href = '/registrasi'" type="button"
                            class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">Kembali</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-white mt-2">
                            Sudah Memiliki Akun? <a href="{{ url('login') }}"
                                class="hover:underline hover:text-primary">Login</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const toggleButton = passwordField.nextElementSibling.querySelector('i');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.classList.remove('fa-eye');
                toggleButton.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                toggleButton.classList.remove('fa-eye-slash');
                toggleButton.classList.add('fa-eye');
            }
        }
    </script>

    <script>
        document.getElementById('password').addEventListener('focus', function() {
            showToast();
        });

        function showToast() {
            var toast = document.getElementById("toast");
            toast.className = "show";
            setTimeout(function() {
                toast.className = toast.className.replace("show", "");
            }, 3000);
        }
    </script>

    <script>
        function validatePasswords() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password tidak sama. Ulangi password.',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                });
                return false;
            }
            return true;
        }
    </script>
</body>


</html>
