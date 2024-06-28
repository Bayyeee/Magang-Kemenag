<!DOCTYPE html>
<html lang="en">

    <x-head-Home></x-head-Home>
    <title>Surat Keterangan Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header, .footer {
            text-align: center;
        }
        .content {
            margin: 20px;
        }
        .content p {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Surat Keterangan Pendaftaran</h1>
    </div>
    <div class="content">
        <p>Dengan ini kami menyatakan bahwa:</p>
        <p>Nama TPA: {{ $pendaftaran->usersTpa->nama_tpa }}</p>
        <p>Alamat: {{ $pendaftaran->usersTpa->alamat }}</p>
        <p>Telah mendaftarkan berkas-berkas yang diperlukan dan telah diverifikasi.</p>
        <p>Tanggal Pendaftaran: {{ $pendaftaran->created_at->format('d-m-Y') }}</p>
        <br>
        <p>Terima kasih.</p>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} TPA. All rights reserved.</p>
    </div>
</body>
</html>
