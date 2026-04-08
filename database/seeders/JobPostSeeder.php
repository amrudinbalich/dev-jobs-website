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
                'title' => 'Senior PHP Developer (Laravel) – Remote',
                'description' => <<<DESC
                        Company: TechFlow GmbH
                        Location: Remote (EU)
                        Salary: €3500 - €5000 / month
                        Type: Full-time
                        
                        Responsibilities:
                        - Build scalable Laravel applications
                        - Develop REST APIs and microservices
                        - Collaborate with frontend teams
                        
                        Requirements:
                        - 5+ years PHP experience
                        - Expert in Laravel
                        - Experience with MySQL/PostgreSQL
                        - Docker knowledge is a plus
                        
                        Start date: ASAP
                        End date: Permanent
                    DESC,
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                    'title' => 'Frontend Developer (React/TypeScript)',
                    'description' => <<<DESC
        Company: DevCore
        Location: Hybrid Sarajevo
        Salary: 2500 - 3500 BAM
        Type: Full-time
        
        Responsibilities:
        - Build responsive UI with React
        - Work with REST APIs
        - Participate in design decisions
        
        Requirements:
        - React, TypeScript
        - Strong JavaScript skills
        - Good understanding of UI/UX
        
        Start date: May 2026
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Junior Backend Developer (Node.js)',
                    'description' => <<<DESC
        Company: CodeNest
        Location: Remote
        Salary: €1200 - €1800 / month
        Type: Full-time
        
        Responsibilities:
        - Develop backend services with Node.js
        - Maintain databases and APIs
        
        Requirements:
        - Node.js basics
        - Express framework
        - SQL fundamentals
        
        Start date: ASAP
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Full Stack Developer (Laravel + Vue)',
                    'description' => <<<DESC
        Company: WebSolutions
        Location: Remote (EU)
        Salary: €2500 - €4000 / month
        Type: Contract (6 months)
        
        Responsibilities:
        - Develop admin panels and dashboards
        - Maintain full stack Laravel + Vue apps
        
        Requirements:
        - Laravel
        - Vue.js
        - Tailwind CSS
        
        Start date: June 2026
        End date: December 2026
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'DevOps Engineer – AWS / Docker',
                    'description' => <<<DESC
        Company: Cloudify
        Location: Remote
        Salary: €4000 - €6000 / month
        Type: Full-time
        
        Responsibilities:
        - Build CI/CD pipelines
        - Manage AWS infrastructure
        - Monitor production systems
        
        Requirements:
        - Docker, Kubernetes
        - AWS knowledge
        
        Start date: ASAP
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'PHP Developer (Symfony)',
                    'description' => <<<DESC
        Company: BackendPro
        Location: Zagreb / Remote
        Salary: €3000 - €4500 / month
        Type: Full-time
        
        Responsibilities:
        - Build enterprise applications with Symfony
        - Maintain APIs and database integrations
        
        Requirements:
        - Symfony experience
        - PostgreSQL knowledge
        - API Platform experience
        
        Start date: April 2026
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Mobile Developer (Flutter)',
                    'description' => <<<DESC
        Company: AppForge
        Location: Remote
        Salary: €2000 - €3500 / month
        Type: Contract
        
        Responsibilities:
        - Build cross-platform mobile apps
        - Work with Firebase and backend APIs
        
        Requirements:
        - Flutter
        - Firebase
        
        Start date: ASAP
        Duration: 4 months
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'QA Engineer (Automation)',
                    'description' => <<<DESC
        Company: QualityFirst
        Location: Remote
        Salary: €1800 - €2800 / month
        Type: Full-time
        
        Responsibilities:
        - Write automated tests
        - Maintain testing frameworks
        - Collaborate with developers
        
        Requirements:
        - Selenium or Cypress experience
        - Attention to detail
        
        Start date: May 2026
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Software Engineer (Java / Spring Boot)',
                    'description' => <<<DESC
        Company: FinTechX
        Location: Remote EU
        Salary: €3500 - €5500 / month
        Type: Full-time
        
        Responsibilities:
        - Develop backend systems in Java/Spring
        - Implement microservices architecture
        - Work on financial software
        
        Requirements:
        - Java, Spring Boot
        - Microservices experience
        
        Start date: ASAP
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Intern Developer – Web (HTML/CSS/JS)',
                    'description' => <<<DESC
        Company: StartUp Lab
        Location: On-site
        Salary: 800 BAM / month
        Type: Internship
        
        Responsibilities:
        - Assist in building web pages
        - Learn and practice frontend skills
        
        Requirements:
        - HTML, CSS, JS basics
        
        Start date: June 2026
        Duration: 3 months
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Data Engineer – Python / ETL',
                    'description' => <<<DESC
        Company: DataStream
        Location: Remote
        Salary: €3000 - €4800 / month
        Type: Full-time
        
        Responsibilities:
        - Build ETL pipelines
        - Maintain data warehouses
        
        Requirements:
        - Python, SQL
        - Airflow or similar tools
        
        Start date: ASAP
        DESC,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                            [
                                'title' => 'Cybersecurity Specialist',
                                'description' => <<<DESC
                    Company: SecureNet
                    Location: Remote
                    Salary: €4000 - €6500 / month
                    Type: Full-time
                    
                    Responsibilities:
                    - Perform security audits
                    - Conduct penetration testing
                    - Monitor security alerts
                    
                    Requirements:
                    - Networking knowledge
                    - Security tools experience
                    
                    Start date: ASAP
                    DESC,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
