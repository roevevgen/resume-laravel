<?php

use App\Models\Experiences;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            [
                'post' => 'Администратор интернет магазина',
                'place' => 'Ирпень',
                'duty' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem dignissimos ea excepturi
                exercitationem maxime perspiciatis porro soluta velit veritatis. Accusantium, aliquid amet at corporis
                 dicta ea error est et facilis impedit ipsam, magni maxime molestias quia quisquam sequi totam ut velit
                  vitae voluptatum? Aut consequatur ducimus eum ipsa ipsam mollitia nisi ut veritatis! Delectus modi
                  officia quod ratione veniam.',
                'published_start' => '2019-12-02 09:00:00',
                'published_end' => '2020-03-11 12:00:00'
            ],
            [
                'post' => 'Програмист PHP',
                'place' => 'City2',
                'duty' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem dignissimos ea excepturi
                exercitationem maxime perspiciatis porro soluta velit veritatis. Accusantium, aliquid amet at corporis
                 dicta ea error est et facilis impedit ipsam, magni maxime molestias quia quisquam sequi totam ut velit
                  vitae voluptatum? Aut consequatur ducimus eum ipsa ipsam mollitia nisi ut veritatis! Delectus modi
                  officia quod ratione veniam.',
                'published_start' => '2020-03-12 12:13:02',
                'published_end' => '2020-03-12 12:13:02'
            ],
            [
                'post' => 'Програмист Laravel',
                'place' => 'City3',
                'duty' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem dignissimos ea excepturi
                exercitationem maxime perspiciatis porro soluta velit veritatis. Accusantium, aliquid amet at corporis
                 dicta ea error est et facilis impedit ipsam, magni maxime molestias quia quisquam sequi totam ut velit
                  vitae voluptatum? Aut consequatur ducimus eum ipsa ipsam mollitia nisi ut veritatis! Delectus modi
                  officia quod ratione veniam.',
                'published_start' => '2020-03-12 12:13:02',
                'published_end' => '2020-03-12 12:13:02'
            ]
        ];
        foreach ($experiences as $career) {
            Experiences::create(array(
                'post' => $career['post'],
                'place' => $career['place'],
                'duty' => $career['duty'],
                'published_start' => $career['published_start'],
                'published_end' => $career['published_end'],
            ));
        }
    }
}
