<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Angkot;
use Carbon\Carbon;

class AngkotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angkots =  [
            [
              'no_angkot' => '1',
              'no_pol' => 'DK 1200 LKS',
              'merk' => 'Mitsubishi',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'no_angkot' => '2',
              'no_pol' => 'L 1209 MMN',
              'merk' => 'Toyota',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'no_angkot' => '3',
              'no_pol' => 'M 2190 MAK',
              'merk' => 'Subaru',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'no_angkot' => '4',
              'no_pol' => 'R 1984 MKN',
              'merk' => 'Tesla',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ];

        Angkot::insert($angkots);
    }
}
