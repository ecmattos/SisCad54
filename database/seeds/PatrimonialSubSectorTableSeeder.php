<?php

use Illuminate\Database\Seeder;

class PatrimonialSubSectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patrimonial_sub_sectors =
        [
            [
                'code'        => 'SL1',
                'description' => 'SALA 01'
            ],
            [
                'code'        => 'SL2',
                'description' => 'SALA 02'
            ],
            [
                'code'        => 'AUD',
                'description' => 'AUDITORIO'
            ],
            [
                'code'        => 'SLR',
                'description' => 'SALA REUNIOES'
            ]
        ];
    
        foreach ($patrimonial_sub_sectors as $patrimonial_sub_sector)
        {
            \SisCad\Entities\PatrimonialSubSector::create($patrimonial_sub_sector);
        }
    }
}

