<?php

use App\Models\CareerProfile;
use Illuminate\Database\Seeder;

class CareerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $career_profiles = [
            [
                'title' => 'I am a junior PHP developer with a great desire to participate in interesting complex
                projects with cool ideas, where I can use my existing skills and develop new ones to help achieve
                 organizational goals',
                'about' => 'I am a Junior Front-End Developer with a great desire to participate in interesting complex
 projects with cool ideas, where I can use my existing skills and develop new ones to contribute to achieving
 organizational goals<br>Punctuality, sociability, responsibility, high efficiency, initiative, energy, dedication,
  ability to work in a team, focus on results. Analytical mindset, willingness to learn and acquire new skills, high
   personal motivation, desire to work and develop,  ability to work in a team, attention to details, quick wit,
    responsibility, determination'
            ]
        ];
        foreach ($career_profiles as $career) {
            CareerProfile::create(array(
                'title' => $career['title'],
                'about' => $career['about'],
            ));
        }
    }
}
