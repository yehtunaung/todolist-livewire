<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies  = [
            [
                'name' => 'Apple',
                'description'   => "I Phone Company"
            ],
            [
                'name' => 'Samsung',
                'description'   => "Samsung Company"
            ],
            [
                'name' => 'Vivo',
                'description'   => "Vivo Company"
            ],
            [
                'name' => 'OPPO',
                'description'   => "oppo Company"
            ],
        ];
        Company::insert($companies);
    }
}
