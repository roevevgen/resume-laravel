<?php

use App\Models\Languages;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'lang' => 'Ukrainian',
                'hold' => 'Professional',
                'title' => 'programming'
            ],
            [
                'lang' => 'Russian',
                'hold' => 'Professional',
                'title' => 'english',
            ],

            [
                'lang' => 'English',
                'hold' => 'Beginning',
                'title' => 'english',
            ]
        ];
        foreach ($languages as $lang) {
            Languages::create(array(
                'lang' => $lang['lang'],
                'hold' => $lang['hold'],
                'title' => $lang['title']
            ));
        }
    }
}
