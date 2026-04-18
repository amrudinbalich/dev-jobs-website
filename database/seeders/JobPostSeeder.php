<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_posts')->insert([
            [
                'title' => 'Senior PHP Developer (Laravel)',
                'description' => 'Work on scalable Laravel applications...',
                'company_id' => 1,
                'category_id' => 1, // PHP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior PHP Developer',
                'description' => 'As a junior...',
                'company_id' => 1,
                'category_id' => 1, // PHP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Developer (React/TypeScript)',
                'description' => 'Build responsive UI...',
                'company_id' => 2,
                'category_id' => 11, // React
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Backend Developer (Node.js)',
                'description' => 'Develop backend services...',
                'company_id' => 3,
                'category_id' => 2, // JavaScript (Node)
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Full Stack Developer (Laravel + Vue)',
                'description' => 'Develop admin panels...',
                'company_id' => 4,
                'category_id' => 10, // Laravel
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DevOps Engineer – AWS / Docker',
                'description' => 'Build CI/CD pipelines...',
                'company_id' => 5,
                'category_id' => 14, // AWS
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP Developer (Symfony)',
                'description' => 'Maintain Symfony apps...',
                'company_id' => 6,
                'category_id' => 1, // PHP
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile Developer (Flutter)',
                'description' => 'Create mobile apps...',
                'company_id' => 7,
                'category_id' => 4, // može Python/ili napravi Flutter kategoriju kasnije
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'QA Automation Engineer',
                'description' => 'Write tests...',
                'company_id' => 8,
                'category_id' => 2, // često JS/Python → uzmi JS
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Java / Spring Boot Developer',
                'description' => 'Develop backend systems...',
                'company_id' => 9,
                'category_id' => 5, // Java
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Engineer (Python/ETL)',
                'description' => 'Build ETL pipelines...',
                'company_id' => 11,
                'category_id' => 4, // Python
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
