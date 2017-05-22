<?php

use Illuminate\Database\Seeder;

class PatrimonialSectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patrimonial_sectors =
        [
            [
                'code'        => 'PRE',
                'description' => 'PRESIDENCIA'
            ],
            [
                'code'        => 'TES',
                'description' => 'TESOURARIA'
            ],
            [
                'code'        => 'COZ',
                'description' => 'COZINHA'
            ],
            [
                'code'        => 'ADM',
                'description' => 'ADMINISTRATIVO'
            ]
        ];
    
        foreach ($patrimonial_sectors as $patrimonial_sector)
        {
            \SisCad\Entities\PatrimonialSector::create($patrimonial_sector);
        }
    }
}

