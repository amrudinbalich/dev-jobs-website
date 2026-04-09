<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'TechFlow GmbH',
                'description' => 'TechFlow GmbH builds scalable SaaS platforms for European startups, focusing on cloud solutions and API-first architecture.',
                'size' => '51-200',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=TechFlow',
                'website_url' => 'https://techflow.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DevCore',
                'description' => 'DevCore is a hybrid team of frontend and backend developers creating innovative web applications for finance and healthcare.',
                'size' => '11-50',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=DevCore',
                'website_url' => 'https://devcore.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CodeNest',
                'description' => 'CodeNest provides remote-first software development services for startups worldwide, with expertise in Node.js and React.',
                'size' => '11-50',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=CodeNest',
                'website_url' => 'https://codenest.dev',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WebSolutions',
                'description' => 'WebSolutions focuses on custom web applications and full-stack development using Laravel and Vue.js for mid-market clients.',
                'size' => '51-200',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=WebSolutions',
                'website_url' => 'https://websolutions.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cloudify',
                'description' => 'Cloudify provides DevOps and cloud infrastructure consulting, helping companies migrate to AWS and implement CI/CD pipelines.',
                'size' => '201-500',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=Cloudify',
                'website_url' => 'https://cloudify.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BackendPro',
                'description' => 'BackendPro delivers enterprise PHP/Symfony solutions for large companies, including API integrations and microservices.',
                'size' => '51-200',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=BackendPro',
                'website_url' => 'https://backendpro.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AppForge',
                'description' => 'AppForge specializes in cross-platform mobile app development using Flutter and Firebase for fast-growing startups.',
                'size' => '11-50',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=AppForge',
                'website_url' => 'https://appforge.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'QualityFirst',
                'description' => 'QualityFirst provides QA and automated testing services, ensuring software reliability and performance for enterprise clients.',
                'size' => '51-200',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=QualityFirst',
                'website_url' => 'https://qualityfirst.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FinTechX',
                'description' => 'FinTechX builds innovative financial software solutions for banks and fintech companies, focusing on Java and Spring Boot.',
                'size' => '201-500',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=FinTechX',
                'website_url' => 'https://fintechx.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'StartUp Lab',
                'description' => 'StartUp Lab helps early-stage startups with web and mobile development, providing mentorship and technical guidance.',
                'size' => '1-10',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=StartUpLab',
                'website_url' => 'https://startuplab.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DataStream',
                'description' => 'DataStream specializes in data engineering, building ETL pipelines and data warehouses for analytics and AI projects.',
                'size' => '51-200',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=DataStream',
                'website_url' => 'https://datastream.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SecureNet',
                'description' => 'SecureNet provides cybersecurity services, performing audits, penetration testing, and security monitoring for enterprises.',
                'size' => '201-500',
                'logo_url' => 'https://via.placeholder.com/150x50.png?text=SecureNet',
                'website_url' => 'https://securenet.io',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
