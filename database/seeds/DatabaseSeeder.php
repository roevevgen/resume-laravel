<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EducationSeeder::class);
         $this->call(CareerProfileSeeder::class);
         $this->call(ExperiencesSeeder::class);
         $this->call(InterestsSeeder::class);
         $this->call(LanguagesSeeder::class);
         $this->call(ProfilesSeeder::class);
         $this->call(ProjectsSeeder::class);
         $this->call(SkillsSeeder::class);
    }
}
