<?php

use App\Models\Projects;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'projects' => 'Blogchain',
                'href' => 'https://github.com/roevevgen/blogchain.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Resume',
                'href' => 'https://github.com/roevevgen/resume.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Advogrand',
                'href' => 'https://github.com/roevevgen/advogrand.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Childhood',
                'href' => 'https://github.com/roevevgen/childhood.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Granit',
                'href' => 'https://github.com/roevevgen/granit.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Nasim',
                'href' => 'https://github.com/roevevgen/nasim.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Sochi',
                'href' => 'https://github.com/roevevgen/Sochi.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Yoga',
                'href' => 'https://github.com/roevevgen/yoga.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Sapfir',
                'href' => 'https://github.com/roevevgen/sapfir.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Travel_agency',
                'href' => 'https://github.com/roevevgen/travel_agency.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'Amazing-Dude',
                'href' => 'https://github.com/roevevgen/Amazing-Dude.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
            [
                'projects' => 'We_believe',
                'href' => 'https://github.com/roevevgen/We_believe.git',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci animi,
                 aspernatur eaque modi mollitia nemo iunt odio vitae voluptatem.',

            ],
        ];
        foreach ($projects as $project) {
            Projects::create(array(
                'projects' => $project['projects'],
                'href' => $project['href'],
                'description' => $project['description'],

            ));
        }
    }
}
