<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Languages
            'PHP',
            'JavaScript',
            'TypeScript',
            'Python',
            'Java',
            'C#',
            'Go',
            'Ruby',
            'Rust',
            'Kotlin',
            'Swift',

            // Frontend
            'Frontend',
            'React',
            'Vue.js',
            'Angular',

            // Backend
            'Backend',
            'Node.js',
            'Laravel',
            'Symfony',
            'Django',
            'Spring Boot',
            '.NET',

            // DevOps
            'DevOps',
            'AWS',
            'Docker',
            'Kubernetes',

            // Mobile
            'Mobile',
            'iOS',
            'Android',
            'React Native',
            'Flutter',

            // Other
            'Data Science',
            'Machine Learning',
            'AI',
            'Cybersecurity',
            'QA',
            'UI/UX',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate([
                'name' => $category,
            ]);
        }
    }
}
