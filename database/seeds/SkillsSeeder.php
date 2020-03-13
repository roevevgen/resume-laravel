<?php

use App\Models\Skills;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'skill' => 'VS Code &amp; Webstorm &amp; PhpStorm',
                'percent' => '100%',

            ],
            [
                'skill' => 'HTML5 &amp; CSS3',
                'percent' => '95%',

            ],
            [
                'skill' => 'SASS  &amp; LESS',
                'percent' => '90%',

            ],
            [
                'skill' => 'Gulp &amp;Webpack',
                'percent' => '80%',

            ],
            [
                'skill' => 'Sketch &amp; Photoshop &amp; Gimp',
                'percent' => '60%',

            ],
            [
                'skill' => 'PHP &amp; SQL &amp; Laravel',
                'percent' => '50%',

            ],
            [
                'skill' => 'Javascript &amp; jQuery',
                'percent' => '40%',

            ],
            [
                'skill' => 'Angular',
                'percent' => '20%',

            ],
            [
                'skill' => 'React &amp; Vue',
                'percent' => '20%',

            ],
        ];
        foreach ($skills as $skill) {
            Skills::create(array(
                'skill' => $skill['skill'],
                'percent' => $skill['percent'],

            ));
        }
    }
}
