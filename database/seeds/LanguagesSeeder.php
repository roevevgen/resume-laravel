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
                'hold' => 'Professional'
            ],
            [
                'lang' => 'Russian',
                'hold' => 'Professional'
            ],

            [
                'lang' => 'English',
                'hold' => 'Beginning'
            ]
        ];
        foreach ($languages as $lang) {
            Languages::create(array(
                'lang' => $lang['lang'],
                'hold' => $lang['hold'],
            ));
        }
    }
}
