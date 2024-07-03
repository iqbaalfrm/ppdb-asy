<!DOCTYPE html>
<html>
<head>
    <style>
        /* Sesuaikan gaya sesuai kebutuhan */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Surat Bukti Pendaftaran</h2>
        </div>
        <div class="content">
            <table>
                <tr>
                    <th>No</th>
                    <th>Detail Siswa</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>NISN</td>
                    <td>{{ $siswa->nisn }}</td>
                </tr>
                <!-- Tambahkan baris-baris lain sesuai dengan data siswa yang perlu ditampilkan -->
            </table>
        </div>
    </div>
</body>
</html>
