<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuccessCase;

class SuccessCasesSeeder extends Seeder
{
    public function run(): void
    {
        $cases = [
            [
                'country' => 'Canada',
                'visa_type' => 'Study Visa',
                'processing_time' => '21 Days',
                'client_name' => 'Rina S.',
                'client_nationality' => 'Indonesian',
                'flag_icon' => '🇨🇦',
                'image_path' => '/images/flags/canada.svg',
                'is_featured' => true
            ],
            [
                'country' => 'Australia',
                'visa_type' => 'Visit Visa',
                'processing_time' => '14 Days',
                'client_name' => 'Ahmad R.',
                'client_nationality' => 'Malaysian',
                'flag_icon' => '🇦🇺',
                'image_path' => '/images/flags/australia.svg',
                'is_featured' => true
            ],
            [
                'country' => 'Europe',
                'visa_type' => 'Business Visa',
                'processing_time' => '30 Days',
                'client_name' => 'David L.',
                'client_nationality' => 'Singaporean',
                'flag_icon' => '🇪🇺',
                'image_path' => '/images/flags/europe.svg',
                'is_featured' => true
            ],
            [
                'country' => 'United Kingdom',
                'visa_type' => 'Student Visa',
                'processing_time' => '25 Days',
                'client_name' => 'Priya K.',
                'client_nationality' => 'Indian',
                'flag_icon' => '🇬🇧',
                'image_path' => '/images/flags/uk.svg',
                'is_featured' => true
            ],
        ];
        
        foreach ($cases as $case) {
            SuccessCase::create($case);
        }
    }
}