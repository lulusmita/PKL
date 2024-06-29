<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users_dummy_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Unknown User',
                'nik' => '9999999999999999',
                'email' => 'unknown@telkom.com',
                'role' => 'MSO',
                'unit_kerja' => 'Assurance',
                'status' => 'aktif',
                'foto' => '999unknown.jpg',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Lulus Dwiyan',
                'nik' => '3316783452341212',
                'email' => 'admin@telkom.com',
                'role' => 'admin',
                'unit_kerja' => 'Assurance',
                'status' => 'aktif',
                'foto' => 'lulus.jpg',
                'password' => bcrypt('12345678'),
                'no_hp' => '081325080083'
            ],
            [
                'name' => 'Aslam Thariq',
                'nik' => '3316783452341211',
                'email' => 'witel@telkom.com',
                'role' => 'witel',
                'witel_id'=>6,
                'status' => 'aktif',
                'foto' => 'aslam.png',
                'password' => bcrypt('12345678'),
                'no_hp' => '081325080076'
            ],
            [
                'name' => 'Dwi Agung',
                'nik' => '3316783452341213',
                'email' => 'MSO@telkom.com',
                'role' => 'MSO',
                'unit_kerja' => 'Quality',
                'status' => 'aktif',
                'foto' => 'dwi.jpg',
                'password' => bcrypt('12345678'),
                'no_hp' => '081325080893'
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
