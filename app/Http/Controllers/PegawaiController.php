<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController
{
    public function index()
    {
        // 1. Nama
        $my_name = "Mersya Meylani Putri";

        // 2. Umur (tanggal lahir sampai hari ini)
        $tanggal_lahir = new \DateTime("2006-05-24");
        $hari_ini = new \DateTime();
        $selisih = $hari_ini->diff($tanggal_lahir);
        $my_age = $selisih->y; // ambil umur dalam tahun

        // 3. Hobi (array minimal 5 item)
        $hobbies = ["Menari", "Memasak", "Nonton", "Kulineran", "Traveling"];

        // 4. Tanggal harus wisuda
        $tgl_harus_wisuda = new \DateTime("2029-10-10");

        // 5. Hitung sisa hari menuju wisuda
        $sisa_hari = $hari_ini->diff($tgl_harus_wisuda);
        $time_to_study_left = $sisa_hari->days;

        // 6. Semester saat ini
        $current_semester = 3;

        // 7. Pesan sesuai semester
        if ($current_semester < 3) {
            $message = "Masih Awal, Kejar TAK";
        } else {
            $message = "Jangan main-main, kurang-kurangi main game!";
        }

        // 8. Cita-cita
        $future_goal = "Menjadi Software Engineer profesional";

        // Kirim data ke view
        return view('pegawai', [
            'my_name'           => $my_name,
            'my_age'            => $my_age,
            'hobbies'           => $hobbies,
            'tgl_harus_wisuda'  => $tgl_harus_wisuda->format('Y-m-d'),
            'time_to_study_left'=> $time_to_study_left,
            'current_semester'  => $current_semester,
            'message'           => $message,
            'future_goal'       => $future_goal,
        ]);
    }
}
