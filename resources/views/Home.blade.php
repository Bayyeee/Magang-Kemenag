<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- TODO untuk level Akses "ADMIN" --}}
    @if (auth()->user()->level == "admin")
    <h1>DASHBOARD</h1>
    <button type="submit"><a href="{{ url('/') }}">Kembali</a></button>
    <button type="submit"><a href="{{ route('logout') }}">Logout</a></button>
    <div>
        <h1>Ini Halaman Khusus Admin</h1>
        <button><a href=""></a>makan</button>
        <button><a href=""></a>minum</button>
    </div>
    {{-- TODO untuk level Akses "USERS" --}}
    @else
    <h1>DASHBOARD</h1>
    <h2>Nama saya : {{ auth()->user()->email }}</h2>
    <button type="submit"><a href="{{ url('/') }}">Kembali</a></button>
    <button type="submit"><a href="{{ route('logout') }}">Logout</a></button>
    @endif
</body>
</html>