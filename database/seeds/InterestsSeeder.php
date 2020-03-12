<?php

use App\Models\Interests;
use Illuminate\Database\Seeder;

class InterestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = [
            [
                'title' => 'programming',

            ],
            [
                'title' => 'english',

            ],
            [
                'title' => 'family',

            ],

        ];
        foreach ($interests  as $interest ) {
           Interests::create(array(
                'title' => $interest['courses']
            ));
        }
    }
}
