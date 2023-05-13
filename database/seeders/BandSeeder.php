<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bands = [
            [
            'm_status'=> 0,
            'band_type'=> 'Band 1',
            'vlaue'=> 400000,
            'rate'=>1
            ],
            [
            'm_status'=> 0,
            'band_type'=> 'Band 2',
            'vlaue'=> 100000,
            'rate'=>10
            ],
            [
            'm_status'=> 0,
            'band_type'=> 'Band 3',
            'vlaue'=> 200000,
            'rate'=>20
            ],
            [
            'm_status'=> 0,
            'band_type'=>'Band 4',
            'vlaue'=> 1300000,
            'rate'=>30
            ],
            [
            'm_status'=> 0,
            'band_type'=>'Band 5',
            'vlaue'=> 2000000,
            'rate'=>36
            ],
            [
            'm_status'=> 1,
            'band_type'=>'Band 1',
            'vlaue'=> 450000,
            'rate'=>1
            ],
            [
            'm_status'=> 1,
            'band_type'=>'Band 2',
            'vlaue'=> 100000,
            'rate'=>10
            ],
            [
            'm_status'=> 1,
            'band_type'=>'Band 3',
            'vlaue'=> 200000,
            'rate'=>20
            ],
            [
            'm_status'=> 1,
            'band_type'=>'Band 4',
            'vlaue'=> 1250000,
            'rate'=>30
            ],
            [
            'm_status'=> 1,
            'band_type'=>'Band 5',
            'vlaue'=> 2000000,
            'rate'=>36
            ]
            ];

            foreach($bands as $band){
                Band::create($band);
            }

    }
}
