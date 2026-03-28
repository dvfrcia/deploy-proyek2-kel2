<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ─── Admin default ───────────────────────────
        User::updateOrCreate(
            ['email' => 'admin@sanggarmulya.id'],
            [
                'name'     => 'Admin Sanggar',
                'email'    => 'admin@sanggarmulya.id',
                'alamat'   => 'Indramayu, Jawa Barat',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
                'status'   => 'aktif',
            ]
        );

        // ─── Contoh anggota ──────────────────────────
        $anggota = [
            [
                'name'    => 'Siti Rahayu',
                'email'   => 'siti@example.com',
                'alamat'  => 'Jl. Melati No. 12, Indramayu',
                'no_hp'   => '081234567890',
            ],
            [
                'name'    => 'Budi Santoso',
                'email'   => 'budi@example.com',
                'alamat'  => 'Jl. Mawar No. 5, Cirebon',
                'no_hp'   => '082345678901',
            ],
            [
                'name'    => 'Dewi Kartika',
                'email'   => 'dewi@example.com',
                'alamat'  => 'Jl. Anggrek No. 8, Indramayu',
                'no_hp'   => '083456789012',
            ],
        ];

        foreach ($anggota as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                array_merge($data, [
                    'password' => Hash::make('password123'),
                    'role'     => 'anggota',
                    'status'   => 'aktif',
                ])
            );
        }
    }
}