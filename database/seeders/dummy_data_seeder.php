<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummy_data_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            witel_seeder::class,
            reports_dummy_seeder::class,
            tiket_dummy_seeder::class,
            users_dummy_seeder::class,
            // newLinks_dummy_seeder::class,
            // ProvSeeder::class,
            // KabSeeder::class,
            // KecSeeder::class,
            // KelSeeder::class,
        ]);
    }
}
