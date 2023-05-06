<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BioadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biodatas = [
            [
                'user_id'               => 1,
                'place_of_birth'        => 'Tanjung Balai',
                'date_of_birth'         => '18 Maret 1996',
                'religion'              => 'Kristen Protestan',
                'gender'                => 'Pria',
                'address'               => 'Batam'
            ]
        ];

        Biodata::insert($biodatas);
    }
}
