<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Trayek;
use Carbon\Carbon;

class TrayekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trayeks =  [
            [
              'nama_trayek' => 'ADL',
              'jalur_trayek' => 'Arjosari-Dinoyo-Landungsari',
              'warna_angkot' => 'Biru-Merah muda',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama_trayek' => 'LA',
              'jalur_trayek' => 'Landungsari-Arjosari',
              'warna_angkot' => 'Biru-Abu abu',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama_trayek' => 'MA',
              'jalur_trayek' => 'Magelang-Arjosari',
              'warna_angkot' => 'Kuning-Putih',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama_trayek' => 'KA',
              'jalur_trayek' => 'Karangploso-Arjosari',
              'warna_angkot' => 'Merah-Kuning-Hijau',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ];

        Trayek::insert($trayeks);
    }
}
