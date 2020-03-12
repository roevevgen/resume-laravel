<?php

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'name' => 'Roev Evgen',
                'post' => 'Full Stack Developer',
                'email' => 'roevevgen7@gmail.com',
                'phone' => '+380936833297',
                'LinkedIn' => 'www.linkedin.com/in/evgen-roev-628b26192',
                'github' => 'https://github.com/roevevgen',
                'twitter' => 'https://twitter.com/RoevEvgen'
            ]
        ];
        foreach ($profiles as $profile) {
            Profile::create(array(
                'name' => $profile['name'],
                'post' => $profile['post'],
                'email' => $profile['email'],
                'phone' => $profile['phone'],
                'LinkedIn' => $profile['LinkedIn'],
                'github' => $profile['github'],
                'twitter' => $profile['twitter'],
            ));
        }
    }
}
