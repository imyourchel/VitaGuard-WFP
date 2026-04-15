<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'General Consultation',
                'description' => 'Basic consultation services with general practitioners for common health concerns and initial medical advice.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Specialist Consultation',
                'description' => 'Specialized medical consultations with expert doctors for specific health conditions and advanced treatment planning.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Medical Checkup',
                'description' => 'Comprehensive health examination packages including vital sign monitoring and physical assessment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Laboratory Test',
                'description' => 'Various laboratory testing services for blood work, diagnostics, and health monitoring.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Telemedicine',
                'description' => 'Remote health services providing convenient virtual consultations and medical advice from home.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
