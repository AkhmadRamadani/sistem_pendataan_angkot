<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sopir;
use Carbon\Carbon;
class SopirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sopirs =  [
            [
              'nama' => 'John Doe',
              'jenis_kelamin' => 'l',
              'alamat' => 'Jl. Apa Saja',
              'status' => 'active',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama' => 'Jonathan Milky',
              'jenis_kelamin' => 'p',
              'alamat' => 'Jl. In Aja Dulu',
              'status' => 'inactive',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama' => 'Johanna Saviour',
              'jenis_kelamin' => 'p',
              'alamat' => 'Jl. Ikan Cupang',
              'status' => 'rest',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
              'nama' => 'Malin Isa Romadhon',
              'jenis_kelamin' => 'l',
              'alamat' => 'Jl. Malaikat Subuh',
              'status' => 'active',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
          ];

        Sopir::insert($sopirs);
    }
}
