<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            margin: 0 auto;
            border-radius: 8px;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }

        .header {
            border-bottom: 2px solid #4274d9 !important;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #4274d9 !important;
            margin: 0;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 3px;
        }

        .value {
            background: #f8f9fa;
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #eee;
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #888;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Pesan Baru - PT Solusi Koneksi Anda</h2>
        </div>

        <div class="field">
            <span class="label">Nama Lengkap:</span>
            <div class="value">{{ $data['nama_lengkap'] }}</div>
        </div>

        <div class="field">
            <span class="label">Email Pengirim:</span>
            <div class="value">{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <span class="label">Isi Pesan:</span>
            <div class="value" style="white-space: pre-line;">{{ $data['pesan'] }}</div>
        </div>

        <div class="footer">
            <p>Pesan ini dikirim otomatis dari formulir kontak website PT Solusi Koneksi Anda.</p>
        </div>
    </div>
</body>

</html>
