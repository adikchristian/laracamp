<?php

namespace Database\Seeders;

use App\Models\ContentBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Diversity',
                'subtitle' => 'Learn from anyone around the <br> world and get a new skills',
                'icon' => '/images/ic_globe.png',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
            [
                'title' => 'A.I Guideline',
                'subtitle' => 'Lara will help you to choose <br> which path that suitable for you',
                'icon' => '/images/ic_globe-1.png',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
            [
                'title' => '1-1 Mentoring',
                'subtitle' => 'We will ensure that you will get <br> what you really do need',
                'icon' => '/images/ic_globe-2.png',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
            [
                'title' => 'Future Job',
                'subtitle' => 'Get your dream job in your dream <br> company together with us',
                'icon' => '/images/ic_globe-3.png',
                'created_at' => \date('Y-m-d', \time()),
                'updated_at' => \date('Y-m-d', \time()),
            ],
        ];

        ContentBenefit::insert($data);
    }
}
