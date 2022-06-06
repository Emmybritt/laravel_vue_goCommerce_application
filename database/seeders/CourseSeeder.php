<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'user_id' => 1, 
            'title' => 'How to build a professional CV', 
            'category' => 'education',
            'description' => 'Learn how to build a profesional CV',
            'amount' => 30,
            'discounted_amount' => 45,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '5hr 45 mins',
            'lessons' => '79',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);

        Course::create([
            'user_id' => 1, 
            'title' => 'How to learn coding', 
            'category' => 'education',
            'description' => 'Learn how to code',
            'amount' => 75,
            'discounted_amount' => 45,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '5hr 45 mins',
            'lessons' => '60',
            'level' => 'Professional',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to boost your market', 
            'category' => 'education',
            'description' => 'Learn how to boost your market',
            'amount' => 55,
            'discounted_amount' => 45,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '3hr 49 mins',
            'lessons' => '50',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to improve your market strategy', 
            'category' => 'education',
            'description' => 'Learn how to improve your marketing strategy',
            'amount' => 40,
            'discounted_amount' => 37,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '6hr 45 mins',
            'lessons' => '52',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to improve your listening skills', 
            'category' => 'education',
            'description' => 'Learn how to improve your listening skills',
            'amount' => 20,
            'discounted_amount' => 15,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '1hr 55 mins',
            'lessons' => '44',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to become a professional hacker', 
            'category' => 'education',
            'description' => 'Learn how to become a profesional hacker',
            'amount' => 100,
            'discounted_amount' => 75,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '9hr 55 mins',
            'lessons' => '80',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to download your favourite movies', 
            'category' => 'Entertainment',
            'description' => 'Learn how to download your favourite movies',
            'amount' => 30,
            'discounted_amount' => 25,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '1hr 10 mins',
            'lessons' => '9',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to learn your different languages', 
            'category' => 'education',
            'description' => 'Learn how to learn your favourite languages',
            'amount' => 40,
            'discounted_amount' => 35,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '3hr 45 mins',
            'lessons' => '39',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to use coreldraw', 
            'category' => 'education',
            'description' => 'Learn how to use coreldraw',
            'amount' => 70,
            'discounted_amount' => 65,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '9hr 55 mins',
            'lessons' => '80',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to build an advanced website', 
            'category' => 'education',
            'description' => 'Learn how to build an advanced website',
            'amount' => 95,
            'discounted_amount' => 87,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '10hr 45 mins',
            'lessons' => '80',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to use Visual studio code', 
            'category' => 'education',
            'description' => 'Learn how to use visual studio code',
            'amount' => 50,
            'discounted_amount' => 45,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '4hr 54 mins',
            'lessons' => '8',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
        Course::create([
            'user_id' => 1, 
            'title' => 'How to learn graphics design', 
            'category' => 'education',
            'description' => 'Learn graphics design',
            'amount' => 70,
            'discounted_amount' => 65,
            'currency' => 'USD',
            'image' => '',
            'rating' => 5,
            'duration' => '4hr 54 mins',
            'lessons' => '15',
            'level' => 'Intermidiate',
            'status' => 'published',
        ]);
    }
}
