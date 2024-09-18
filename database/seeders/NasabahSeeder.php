<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nasabahs')->insert([
            ['nama' => 'Dimas', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-17', 'saldo' => 50, 'status' => 'aktif', 'rekening' => '918771845785', 'nis' => '852704298545'],
            ['nama' => 'Aria', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-16', 'saldo' => 100, 'status' => 'aktif', 'rekening' => '918771845786', 'nis' => '852704298546'],
            ['nama' => 'Budi', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-15', 'saldo' => 200, 'status' => 'aktif', 'rekening' => '918771845787', 'nis' => '852704298547'],
            ['nama' => 'Citra', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-14', 'saldo' => 150, 'status' => 'non-aktif', 'rekening' => '918771845788', 'nis' => '852704298548'],
            ['nama' => 'Dina', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-13', 'saldo' => 175, 'status' => 'aktif', 'rekening' => '918771845789', 'nis' => '852704298549'],
            ['nama' => 'Edo', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-12', 'saldo' => 300, 'status' => 'non-aktif', 'rekening' => '918771845790', 'nis' => '852704298550'],
            ['nama' => 'Fira', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-11', 'saldo' => 80, 'status' => 'aktif', 'rekening' => '918771845791', 'nis' => '852704298551'],
            ['nama' => 'Gina', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-10', 'saldo' => 120, 'status' => 'aktif', 'rekening' => '918771845792', 'nis' => '852704298552'],
            ['nama' => 'Hadi', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-09', 'saldo' => 90, 'status' => 'non-aktif', 'rekening' => '918771845793', 'nis' => '852704298553'],
            ['nama' => 'Ira', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-08', 'saldo' => 110, 'status' => 'aktif', 'rekening' => '918771845794', 'nis' => '852704298554'],
            ['nama' => 'Joko', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-07', 'saldo' => 60, 'status' => 'aktif', 'rekening' => '918771845795', 'nis' => '852704298555'],
            ['nama' => 'Kiki', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-06', 'saldo' => 70, 'status' => 'non-aktif', 'rekening' => '918771845796', 'nis' => '852704298556'],
            ['nama' => 'Lina', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-05', 'saldo' => 130, 'status' => 'aktif', 'rekening' => '918771845797', 'nis' => '852704298557'],
            ['nama' => 'Mina', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-04', 'saldo' => 140, 'status' => 'aktif', 'rekening' => '918771845798', 'nis' => '852704298558'],
            ['nama' => 'Nina', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-03', 'saldo' => 95, 'status' => 'non-aktif', 'rekening' => '918771845799', 'nis' => '852704298559'],
            ['nama' => 'Omar', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-09-02', 'saldo' => 85, 'status' => 'aktif', 'rekening' => '918771845800', 'nis' => '852704298560'],
            ['nama' => 'Peni', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-09-01', 'saldo' => 160, 'status' => 'aktif', 'rekening' => '918771845801', 'nis' => '852704298561'],
            ['nama' => 'Qian', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-31', 'saldo' => 75, 'status' => 'non-aktif', 'rekening' => '918771845802', 'nis' => '852704298562'],
            ['nama' => 'Rina', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-30', 'saldo' => 190, 'status' => 'aktif', 'rekening' => '918771845803', 'nis' => '852704298563'],
            ['nama' => 'Sari', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-29', 'saldo' => 110, 'status' => 'aktif', 'rekening' => '918771845804', 'nis' => '852704298564'],
            ['nama' => 'Tari', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-28', 'saldo' => 80, 'status' => 'non-aktif', 'rekening' => '918771845805', 'nis' => '852704298565'],
            ['nama' => 'Uli', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-27', 'saldo' => 105, 'status' => 'aktif', 'rekening' => '918771845806', 'nis' => '852704298566'],
            ['nama' => 'Vina', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-26', 'saldo' => 120, 'status' => 'aktif', 'rekening' => '918771845807', 'nis' => '852704298567'],
            ['nama' => 'Wina', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-25', 'saldo' => 85, 'status' => 'non-aktif', 'rekening' => '918771845808', 'nis' => '852704298568'],
            ['nama' => 'Xara', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-24', 'saldo' => 140, 'status' => 'aktif', 'rekening' => '918771845809', 'nis' => '852704298569'],
            ['nama' => 'Yani', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-23', 'saldo' => 95, 'status' => 'aktif', 'rekening' => '918771845810', 'nis' => '852704298570'],
            ['nama' => 'Zara', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-22', 'saldo' => 110, 'status' => 'non-aktif', 'rekening' => '918771845811', 'nis' => '852704298571'],
            ['nama' => 'Agus', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-21', 'saldo' => 85, 'status' => 'aktif', 'rekening' => '918771845812', 'nis' => '852704298572'],
            ['nama' => 'Beni', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-20', 'saldo' => 160, 'status' => 'aktif', 'rekening' => '918771845813', 'nis' => '852704298573'],
            ['nama' => 'Cici', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-19', 'saldo' => 75, 'status' => 'non-aktif', 'rekening' => '918771845814', 'nis' => '852704298574'],
            ['nama' => 'Dodi', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-18', 'saldo' => 135, 'status' => 'aktif', 'rekening' => '918771845815', 'nis' => '852704298575'],
            ['nama' => 'Evi', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-17', 'saldo' => 105, 'status' => 'aktif', 'rekening' => '918771845816', 'nis' => '852704298576'],
            ['nama' => 'Fani', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-16', 'saldo' => 90, 'status' => 'non-aktif', 'rekening' => '918771845817', 'nis' => '852704298577'],
            ['nama' => 'Gani', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-15', 'saldo' => 120, 'status' => 'aktif', 'rekening' => '918771845818', 'nis' => '852704298578'],
            ['nama' => 'Heni', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-14', 'saldo' => 140, 'status' => 'aktif', 'rekening' => '918771845819', 'nis' => '852704298579'],
            ['nama' => 'Ika', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-13', 'saldo' => 80, 'status' => 'non-aktif', 'rekening' => '918771845820', 'nis' => '852704298580'],
            ['nama' => 'Jeni', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-12', 'saldo' => 150, 'status' => 'aktif', 'rekening' => '918771845821', 'nis' => '852704298581'],
            ['nama' => 'Kris', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-11', 'saldo' => 100, 'status' => 'aktif', 'rekening' => '918771845822', 'nis' => '852704298582'],
            ['nama' => 'Lala', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-10', 'saldo' => 85, 'status' => 'non-aktif', 'rekening' => '918771845823', 'nis' => '852704298583'],
            ['nama' => 'Maya', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-09', 'saldo' => 130, 'status' => 'aktif', 'rekening' => '918771845824', 'nis' => '852704298584'],
            ['nama' => 'Novi', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-08', 'saldo' => 120, 'status' => 'aktif', 'rekening' => '918771845825', 'nis' => '852704298585'],
            ['nama' => 'Ocha', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-07', 'saldo' => 90, 'status' => 'non-aktif', 'rekening' => '918771845826', 'nis' => '852704298586'],
            ['nama' => 'Puto', 'kelas' => '12', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-06', 'saldo' => 140, 'status' => 'aktif', 'rekening' => '918771845827', 'nis' => '852704298587'],
            ['nama' => 'Qila', 'kelas' => '11', 'jurusan' => 'RPL', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-05', 'saldo' => 75, 'status' => 'aktif', 'rekening' => '918771845828', 'nis' => '852704298588'],
            ['nama' => 'Rini', 'kelas' => '10', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-04', 'saldo' => 125, 'status' => 'non-aktif', 'rekening' => '918771845829', 'nis' => '852704298589'],
            ['nama' => 'Sina', 'kelas' => '12', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-03', 'saldo' => 140, 'status' => 'aktif', 'rekening' => '918771845830', 'nis' => '852704298590'],
            ['nama' => 'Tina', 'kelas' => '11', 'jurusan' => 'TKJ', 'jenis_kelamin' => 'P', 'tanggal_pembuatan' => '2024-08-02', 'saldo' => 95, 'status' => 'aktif', 'rekening' => '918771845831', 'nis' => '852704298591'],
            ['nama' => 'Uta', 'kelas' => '10', 'jurusan' => 'RPL', 'jenis_kelamin' => 'L', 'tanggal_pembuatan' => '2024-08-01', 'saldo' => 80, 'status' => 'non-aktif', 'rekening' => '918771845832', 'nis' => '852704298592'],
        ]);
    }
}
