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
                'description' => 'Work on scalable Laravel applications, develop REST APIs, and collaborate with frontend teams using Vue.js.',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior PHP Developer',
                'description' => 'As a junior, you will be responsible to build and test reliable REST Apis consumable by clients. On this role you will work closely with other team members, being mentored by senior.',
                'company_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Developer (React/TypeScript)',
                'description' => 'Build responsive user interfaces, work with APIs, and contribute to design and UX decisions.',
                'company_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Backend Developer (Node.js)',
                'description' => 'Develop backend services using Node.js and Express, maintain databases, and implement new features.',
                'company_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Full Stack Developer (Laravel + Vue)',
                'description' => 'Develop admin panels and dashboards, maintain full stack applications, and optimize performance.',
                'company_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DevOps Engineer – AWS / Docker',
                'description' => 'Build CI/CD pipelines, manage AWS infrastructure, and monitor production systems for reliability.',
                'company_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP Developer (Symfony)',
                'description' => 'Maintain and develop enterprise Symfony applications, including API integrations and database design.',
                'company_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile Developer (Flutter)',
                'description' => 'Create cross-platform mobile apps with Flutter and Firebase, ensuring high performance and smooth UX.',
                'company_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'QA Automation Engineer',
                'description' => 'Write automated tests, maintain testing frameworks, and collaborate with developers to ensure software quality.',
                'company_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Java / Spring Boot Developer',
                'description' => 'Develop backend systems using Java and Spring Boot, implement microservices, and ensure code quality.',
                'company_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Engineer (Python/ETL)',
                'description' => 'Build ETL pipelines, manage data warehouses, and ensure data is reliable and accessible for analytics.',
                'company_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
