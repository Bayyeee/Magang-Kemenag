<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Kop Surat</title>
    <style type="text/css">
        .prtext {
            color: #000000;
            font-family: tahoma;
            font-size: 11px;
        }

        .prhead {
            color: #000000;
            font-family: tahoma;
            font-size: 14px;
        }

        .prtext_blacksmall {
            font-size: 14px;
            color: #000000;
            font-family: tahoma;
        }

        .prtitle {
            font-size: 22px;
            color: #000000;
            font-family: tahoma;
            font-weight: bold;
            /* Memberikan jarak antara judul dan garis bawah */
        }

        .address {
            font-size: 14px;
            color: #000000;
            font-family: times new roman;
        }

        .logo {
            width: 100px;
            margin-left: 20px;
            /* Menambahkan margin kiri untuk memberikan lebih banyak jarak */
        }

        hr.style-eight {
            padding: 0;
            border: outset;
            border-top: medium double #333;
            color: #333;
            text-align: center;
            width: calc(100% - 40px);
            /* Menambahkan lebar pada garis */
        }

        hr.style-eight:after {
            display: inline-block;
            position: relative;
            top: -0.7em;
            font-size: 1.5em;
            padding: 0 0.25em;
            background: white;
        }

        @page {
            size: 8.27in 11.69in;
            margin: 2cm;
        }

        div.page {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="page">
        <table align="center" width="100%" border="0">
            <tr>
                <td class="prtext">
                    <center>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody>
                                <tr>
                                    <td width="15%" valign="middle">
                                        <img class="logo" style="margin-left: -12px;"
                                            src="{{ public_path('images/kop_surat.png') }}">
                                    </td>
                                    <td width="500px" align="center" valign="middle" class="prtext_blacksmall">
                                        <b>
                                            <div class="prtitle">KEMENTERIAN AGAMA KOTA BANJARMASIN</div>
                                        </b>
                                        <span class="address">
                                            Jl. Pulau Laut No.24 Kota Banjarmasin. 70114<br />
                                            Telp: (0511) 335386, Fax: (0511) 335386<br />
                                            e-mail: bjmkalsel@kemenag.go.id Website: banjarmasinkota.kemenag.go.id
                                        </span>
                                    </td>
                                    <td width="15%" valign="middle">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr class="style-eight" />
                    </center>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
