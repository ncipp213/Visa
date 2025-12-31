<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VisaType;

class VisaTypesSeeder extends Seeder
{
    public function run(): void
    {
        $visaTypes = [
            ['name' => 'Student Visa', 'category' => 'study', 'starting_price' => 500],
            ['name' => 'Work Visa', 'category' => 'work', 'starting_price' => 800],
            ['name' => 'Business Visa', 'category' => 'business', 'starting_price' => 1000],
            ['name' => 'Visit Visa', 'category' => 'visit', 'starting_price' => 300],
            ['name' => 'Investment Visa', 'category' => 'investment', 'starting_price' => 1500],
        ];
        
        foreach ($visaTypes as $type) {
            VisaType::create($type);
        }
    }
}