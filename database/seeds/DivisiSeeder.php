<?php

use Illuminate\Database\Seeder;
use App\Divisi;

use function Ramsey\Uuid\v1;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'KEPALA UPT PUSKESMAS PAGERWOJO'
            ],
            [
                'nama' => 'MANAJEMEN MUTU'
            ],
            [
                'nama' => 'SISTEM INFORMASI PUSKESMAS'
            ],
            [
                'nama' => 'KEPEGAWAIAN'
            ],
            [
                'nama' => 'RUMAH TANGGA'
            ],
            [
                'nama' => 'KEUANGAN'
            ],
            [
                'nama' => 'PENANGGUNGJAWAB UKM ESSENSIAL DAN KEPERAWATAN KESEHATAN MASYARAKAT'
            ],
            [
                'nama' => 'PENANGGUNGJAWAB UKM PENGEMBANGAN'
            ],
            [
                'nama' => 'PENANGGUNGJAWAB UKP, KEFARMASIAN DAN LABORATORIUM'
            ],
            [
                'nama' => 'PENANGGUNGJAWAB JARINGAN PELAYANAN PUSKESMAS DAN JEJARING FASILITAS PELAYANAN KESEHATAN'
            ],
             [
                'nama' => 'PELAKSANA PROMOSI KESEHATAN TERMASUK UKS'
            ],

            [
                'nama' => 'PELAKSANA KESEHATAN LINGKUNGAN'
            ],
            [
                'nama' => 'PELAKSANA KIA-KB YANG BERSIFAT UKM'
            ],
            [
                'nama' => 'PELAKSANA GIZI YANG BERSIFAT UKM'
            ],
            [
                'nama' => 'PELAKSANA PENCEGAHAN DAN PENGENDALIAN PENYAKIT'
            ],
            [
                'nama' => 'PELAKSANA KEPERAWATAN KESEHATAN MASYARAKAT'
            ],
            [
                'nama' => 'PELAKSANA KESEHATAN JIWA'
            ],
            [
                'nama' => 'PELAKSANA UKGMD'
            ],
            [
                'nama' => 'PELAKSANA BATRA DAN KOMPLEMENTER'
            ],
            [
                'nama' => 'PELAKSANA KESEHATAN OLAHRAGA'
            ],
            [
                'nama' => 'PELAKSANA KESEHATAN INDERA'
            ],
            [
                'nama' => 'PELAKSANA KESEHATAN LANSIA'
            ],
            [
                'nama' => 'PELAKSANA KESEHATAN KERJA'
            ],
            [
                'nama' => 'PELAKSANA POLI UMUM'
            ],
            [
                'nama' => 'PELAKSANA POLI GIGI DAN MULUT'
            ],
            [
                'nama' => 'PELAKSANA GIZI YANG BERSIFAT UKP'
            ],
            [
                'nama' => 'PELAKSANA GAWAT DARURAT'
            ],
            [
                'nama' => 'PELAKSANA KEFARMASIAN'
            ],
            [
                'nama' => 'PELAKSANA KIA-KB'
            ],
            [
                'nama' => 'PELAKSANA PERSALINAN/PONED'
            ],
            [
                'nama' => 'PELAKSANA RAWAT INAP'
            ],
            [
                'nama' => 'PELAKSANA LABORATORIUM'
            ],
            [
                'nama' => 'PUSTU WONOREJO'
            ],
            [
                'nama' => 'PUSTU SEGAWE'
            ],
            [
                'nama' => 'PUSTU PAGERWOJO'
            ],
            [
                'nama' => 'PUSTU KRADINAN'
            ],
            [
                'nama' => 'PUSLING 1'
            ],
            [
                'nama' => 'PUSLING 2'
            ],
            [
                'nama' => 'PUSLING 3'
            ],
            [
                'nama' => 'JEJARING FASILITAS PELAYANAN KESEHATAN'
            ],
            [
                'nama' => 'DESA PENJOR'
            ],
            [
                'nama' => 'DESA KEDUNGCANGKRING'
            ],
            [
                'nama' => 'DESA SIDOMULYO'
            ],
            [
                'nama' => 'DESA SAMAR'
            ],
            [
                'nama' => 'DESA GAMBIRAN'
            ],
            [
                'nama' => 'DESA GONDANGGUNUNG'
            ],

        ];

        Divisi::insert($data);
    }
}
