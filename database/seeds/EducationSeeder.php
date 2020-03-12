<?php

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            [
                'courses' => 'SEO courses',
                'training' => 'Cursor, Kiev Training Center',
                'published_start' => '2018-03-01 22:25:30',
                'published_end' => '2019-01-01 22:25:51'
            ],
            [
                'courses' => 'Web UI Basics',
                'training' => 'Lviv IT School - Prometheus',
                'published_start' => '2019-01-01 22:27:06',
                'published_end' => '2019-04-01 22:27:38'
            ],
            [
                'courses' => 'HTML5&CSS3 Starter',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-05-06 22:30:57'
            ],
            [
                'courses' => 'JavaScript Essential',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-04 22:31:52'
            ],
            [
                'courses' => 'JavaScript Advanced',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-09 22:32:41'
            ],
            [
                'courses' => 'HTML5&CSS3 Advanced',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-05 22:33:52'
            ],
            [
                'courses' => 'Twitter Bootstrap4',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-03 22:35:06'
            ],
            [
                'courses' => 'TipeScript Fundamentals',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-10 22:36:14'
            ],
            [
                'courses' => 'Angular Essential',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-10 22:37:08'
            ],
            [
                'courses' => 'Web Frontend Developer',
                'training' => 'CuberBionic Systematics',
                'published_start' => '2019-01-01 22:30:10',
                'published_end' => '2019-06-13 22:37:55'
            ]
        ];
        foreach ($education as $educations) {
            Education::create(array(
                'courses' => $educations['courses'],
                'training' => $educations['training'],
                'published_start' => $educations['published_start'],
                'published_end' => $educations['published_end'],
            ));
        }
    }

}
