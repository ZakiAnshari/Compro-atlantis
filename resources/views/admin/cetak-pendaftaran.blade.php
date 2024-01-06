<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Pendaftaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
    table.static{
        position: relative;
        border: 1px solid black;
    }
</style>
<body>
    <div class="form-group">
        <br>
        <p align="center"  style="font-size: 20px;font-family: Poppins;"><b>LAPORAN DATA PENDAFTARAN</b></p>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center" >
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Nama Sekolah Asal</th>
                    <th>No Telepon Siswa</th>
                    <th >Email Siswa</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Nama Wali</th>
                    <th>No Telepon Ortu</th>
                    <th>Tgl Pendaftaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $item)
                <tr >
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jeniskelamin }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->namasekolahasal }}</td>
                    <td>{{ $item->noteleponsiswa }}</td>
                    <td>{{ $item->emailsiswa }}</td>
                    <td>{{ $item->jenjangpendidikan }}</td>
                    <td>{{ $item->namawali }}</td>
                    <td>{{ $item->noteleponortu }}</td>
                    <td>{{ $item->created_at->format('d F Y') }}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>