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
                'name' => 'Aslam Thariq',
                'nik' => '12345678901230001',
                'email' => 'admin@telkom.com',
                'role' => 'admin',
                'unit_kerja' => 'Assurance',
                'status' => 'aktif',
                'foto' => 'aslam.jpeg',
                'password' => bcrypt('123456'),
                'no_hp' => '081325080083'
            ],
            [
                'name' => 'Lulus Setiawan',
                'nik' => '12345678901230002',
                'email' => 'witel@telkom.com',
                'role' => 'witel',
                'unit_kerja' => 'Fulfillment',
                'status' => 'aktif',
                'foto' => 'lulus.jpeg',
                'password' => bcrypt('123456'),
                'no_hp' => '081325080076'
            ],
            [
                'name' => 'Dwi Agung',
                'nik' => '12345678901230003',
                'email' => 'MSO@telkom.com',
                'role' => 'MSO',
                'unit_kerja' => 'Quality',
                'status' => 'aktif',
                'foto' => 'dwi.jpg',
                'password' => bcrypt('123456'),
                'no_hp' => '081325080893'
            ]
        ];

        $names = ['Jono joni', 'Diffa Nanda', 'Subagyono mwah', 'Sugiyatno', 'Sumarli', 'Edy Suyoso', 'Maspuah', 'Ezzat william', 'Tandur Pari', 'Sibal Sombil', 'Anam Anum', 'Lolas Lulus'];

        foreach ($names as $name) {
            $randomPhoto = ['aslam.jpeg', 'lulus.jpeg', 'dwi.jpg'][rand(0, 2)];
            $randomRole = ['MSO', 'witel'][rand(0, 1)];
            $randomUnit = ['Assurance', 'Quality', 'Fulfillment'][rand(0, 2)];
            $randomStatus = ['Aktif', 'Cuti'][rand(0, 1)];

            User::create([
                'name' => $name,
                'nik' => rand(1000000000000, 9999999999999),
                'email' => strtolower(str_replace(' ', '', $name)) . '@telkom.com',
                'role' => $randomRole,
                'unit_kerja' => $randomUnit,
                'status' =>  $randomStatus,
                'foto' => $randomPhoto,
                'password' => bcrypt('123456'),
                'no_hp' => '0813' . rand(100000000, 999999999),
            ]);
        }

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
