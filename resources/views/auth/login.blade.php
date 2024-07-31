<!DOCTYPE html>
<html lang="en">

<x-headHtml></x-headHtml>

<head>
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
    <title>Login</title>
</head>

<body>
    <section id="#" class="py-28 px-16"
        style="background-image: url({{ asset('images/kemenag_depan.png') }}); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Left column: Description and buttons -->
            <div class="md:w-2/4 p-5 text-center md:text-left mb-8 md:mb-0 bg-opacity-50 bg-black rounded-lg">
                <h2 class="text-4xl font-bold mt-3 text-white "> <span class=""
                        style="color: greenyellow">Kementerian Agama</span> Kota Banjarmasin</h2>
                <p class="my-7 mt-2 text-white">Bersih Melayani, Ikhlas Beramal</p>
                <form class="space-y-6" action="{{ route('postlogin') }}" method="POST">
                    {{ csrf_field() }}
                    <h5 class="text-2xl font-bold text-gray-900 dark:text-white -mb-5">Login</h5>
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email
                            User</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black""
                            placeholder="email@company.com" required />
                    </div>
                    {{-- <div>
                        <label for="password"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password
                            User</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                            required />
                    </div> --}}
                    <div class="password-container">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                            Password Users
                        </label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}"
                            title="Password harus terdiri dari 8-16 karakter, mengandung minimal 1 huruf besar, 1 angka, dan 1 simbol unik."
                            required />
                        <span class="toggle-password closed mt-3" onclick="togglePassword('password')"><i class="fas fa-eye opacity-50"></i></span>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                    required />
                            </div>
                            <label for="" class="ms-2 text-sm font-medium text-gray-900 text-white">Remember
                                me</label>
                        </div>
                        {{-- <a href="#" class="ms-auto text-sm text-white hover:underline text-white-500">Lupa
                            Password?</a> --}}
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                    <button onclick="window.location.href = '/'" type="button"
                        class="w-full text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-white">
                        Belum Punya Akun? <a href="{{ url('registrasi') }}"
                            class="hover:underline hover:text-primary ">Buat Akun</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
    @include('sweetalert::alert')

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
