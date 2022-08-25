<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurnal;
use App\Models\JurnalData;
use App\Models\User;
use App\Models\Kehadiran;
use App\Models\Signature;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // Jurnal_ID Create
        Jurnal::create([
            'id' => 'JKA',
            'nama_jurnal' => 'Jurnal Kantor',
        ]);
        Jurnal::create([
            'id' => 'JLS',
            'nama_jurnal' => 'Jurnal Luar Sekolah',
        ]);
        Jurnal::create([
            'id' => 'JKE',
            'nama_jurnal' => 'Jurnal Luar Sekolah',
        ]);
        Jurnal::create([
            'id' => 'JAL',
            'nama_jurnal' => 'Jurnal Alquran',
        ]);
        Jurnal::create([
            'id' => 'JEK',
            'nama_jurnal' => 'Jurnal Alquran',
        ]);

        Signature::create([
            'nama' => 'Kepala Sekolah, S. Kom.',
            'NIPY' => '19980502202009046',
            'kelas' => 'ks'
        ]);
        Signature::create([
            'nama' => 'Wali Kelas 7, S. Kom.',
            'NIPY' => '19980502202009046',
            'kelas' => '7'
        ]);
        Signature::create([
            'nama' => 'Wali Kelas 8, S. Kom.',
            'NIPY' => '19980502202009047',
            'kelas' => '8'
        ]);
        Signature::create([
            'nama' => 'Wali Kelas 9, S. Kom.',
            'NIPY' => '19980502202009048',
            'kelas' => '9'
        ]);



        $ket = ['Hadir', 'Izin', 'Sakit'];
        $jurnal = ['JKA', 'JLS'];
        $kel = ['L', 'P'];

        for($a = 1; $a <= 13; $a++) {
            $pili_kel = array_rand($kel);
            User::create([
                'username' => '1520116700'.$a,
                'name' => 'Nama Guru'.$a.' S. Kom',
                'password' => bcrypt('123123'),
                'jk' => $kel[$pili_kel],
                'email' => 'tegaracs.ti@gmail.com',
                'nipy' => '1520116700'.$a,
                'address' => 'Wonosalam, Jombang',
                'contact' => '0816827249',
                'mapel' => 'Matematika, IPA',
                'tgl_lahir' => 'Jombang, 17 Juni 1997'
            ]);

            for($i = 10; $i <= 30; $i++) {

                $pilih = array_rand($ket);
                $pilih_jurnal = array_rand($jurnal);

                if($ket[$pilih] !== 'Hadir') {
                    Kehadiran::create([
                        'user_username' => '1520116700'.$a,
                        'tanggal_kehadiran' => '2022-08-'.$i,
                        'ket_kehadiran' => $ket[$pilih],
                        'jam_datang' => '',
                        'jam_pulang' => ''
                    ]);
                }
                if($ket[$pilih] == 'Hadir') {
                    Kehadiran::create([
                        'user_username' => '1520116700'.$a,
                        'tanggal_kehadiran' => '2022-08-'.$i,
                        'ket_kehadiran' => $ket[$pilih],
                        'jam_datang' => '07:00',
                        'jam_pulang' => '12:00'
                    ]);
                }

                JurnalData::create([
                    'user_username' => '1520116700'.$a,
                    'tanggal_jurnal' => '2022-08-'.$i,
                    'jurnal_id' => $jurnal[$pilih_jurnal],
                    'jam_mulai' => '07:00',
                    'jam_selesai' => '12:00',
                    'deskripsi_kegiatan' => '-Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, suscipit! <br>
-Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
-Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam!'
                ]);
            
            }
        }

                
    }
}