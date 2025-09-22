<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Diri</h1>

    <p><b>Nama:</b> {{ $my_name }}</p>
    <p><b>Umur:</b> {{ $my_age }} tahun</p>

    <p><b>Hobi:</b></p>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>

    <p><b>Tanggal Harus Wisuda:</b> {{ $tgl_harus_wisuda }}</p>
    <p><b>Sisa Hari Menuju Wisuda:</b> {{ $time_to_study_left }} hari</p>

    <p><b>Semester Saat Ini:</b> {{ $current_semester }}</p>
    <p><b>Pesan:</b> {{ $message }}</p>

    <p><b>Cita-cita:</b> {{ $future_goal }}</p>
</body>
</html>
