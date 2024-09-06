<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phones  = [
            [
                'name' => 'I Phone 12',
                'company_id'   => 1
            ],
            [
                'name' => 'I Phone 13',
                'company_id'   => 1
            ],
            [
                'name' => 'Samasung note 10',
                'company_id'   => 2
            ],
            [
                'name' => 'Samasung a-50',
                'company_id'   => 2
            ],
            [
                'name' => 'VIVO Y-50',
                'company_id'   => 3
            ],
            [
                'name' => 'Vivo y-15',
                'company_id'   => 2
            ],
            [
                'name' => 'Oppo Reno-7',
                'company_id'   => 3
            ],
            [
                'name' => 'Oppo A-5',
                'company_id'   => 3
            ],
        ];
        Phone::insert($phones);
    }
}
