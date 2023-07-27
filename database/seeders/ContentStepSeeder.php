<?php

namespace Database\Seeders;

use App\Models\ContentStep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Prepare The Journey',
                'subtitle' => 'BETTER CAREER',
                'description' => 'Learn from anyone around the world and get a new skills',
                'link' => '#',
                'image' => '/images/step1.png',
                'btnvalue' => 'Learn More',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
            [
                'title' => 'Finish The Project',
                'subtitle' => 'STUDY HARDER',
                'description' => 'Each of you will be joining the private group and also working together with team members on project',
                'link' => '#',
                'image' => '/images/step2.png',
                'btnvalue' => 'View Demo',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
            [
                'title' => 'Big Demo Day',
                'subtitle' => 'END GAME',
                'description' => 'Learn how to speaking in public to demonstrate your final project and receive the important feedbacks',
                'link' => '#',
                'image' => '/images/step3.png',
                'btnvalue' => 'Showcase',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
        ];

        ContentStep::insert($data);
    }
}
