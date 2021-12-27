<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentManager;

class ContentManagerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'type' => 'all',
                'placeholder_name' => 'all-serve-you',
                'placeholder_value' => ''
            ],
            [
                'type' => 'home',
                'placeholder_name' => 'home-header-note',
                'placeholder_value' => '<p><span style=\"font-size: 1rem; color: inherit; font-family: inherit;\">Certification Exam</span><br></p><h1><span style=\"font-size: 1rem;\">Preparation Material</span></h1>'
            ],
            [
                'type' => 'home',
                'placeholder_name' => 'home-popular-vendors',
                'placeholder_value' => ''
            ],
            [
                'type' => 'home',
                'placeholder_name' => 'home-offer-anyone',
                'placeholder_value' => ''
            ],
            [
                'type' => 'home',
                'placeholder_name' => 'home-popular-exam',
                'placeholder_value' => ''
            ],
            [
                'type' => 'vendor',
                'placeholder_name' => 'vendor-description-note',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-detail',
                'placeholder_name' => 'exam-detail-head-note',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-detail',
                'placeholder_name' => 'exam-detail-footer',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-exam-desc-1',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-exam-desc-2',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-make-better-desc',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-latest-syllabus',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-free-updates',
                'placeholder_value' => ''
            ],
            [
                'type' => 'exam-info',
                'placeholder_name' => 'exam-info-practice-test',
                'placeholder_value' => ''
            ]
        ];
        ContentManager::create($data);
    }
}
