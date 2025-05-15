<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nrp' => '1234567890',
                'nama' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'jurusan' => 'Informatika',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nrp' => '0987654321',
                'nama' => 'Siti Rahma',
                'email' => 'siti@example.com',
                'jurusan' => 'Sistem Informasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nrp' => '1122334455',
                'nama' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'jurusan' => 'Teknik Elektro',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nrp' => '6677889900',
                'nama' => 'Dewi Lestari',
                'email' => 'dewi@example.com',
                'jurusan' => 'Arsitektur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nrp' => '4455667788',
                'nama' => 'Rizky Hidayat',
                'email' => 'rizky@example.com',
                'jurusan' => 'Teknik Sipil',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}