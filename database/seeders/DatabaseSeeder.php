<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'nama_kelas' => '12A',
            'kompetensi_keahlian' => 'RPL',
        ]);

        Petugas::create([
            'username' => 'admin',
            'password' => 'asdf',
            'nama_petugas' => 'Rusdi',
            'level' => 'admin'
        ]);

        Siswa::create([
            'nis' => '212',
            'nama' => 'Kemal',
            'id_kelas' => 1,
            'alamat' => 'Semarang',
            'no_telp' => '1234567890',
            'id_spp' => 1
        ]);

        Siswa::create([
            'nis' => '213',
            'nama' => 'Rafli',
            'id_kelas' => 1,
            'alamat' => 'Ambarawa',
            'no_telp' => '121232324',
            'id_spp' => 1
        ]);

        Spp::create([
            'tahun' => 2022,
            'nominal' => 200000
        ]);
    }
}
