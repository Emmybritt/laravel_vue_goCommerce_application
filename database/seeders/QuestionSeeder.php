<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'slug' => Str::slug(Str::random(10)),
            'email' => Str::random(10).'@gmail.com',
            'phone_number' => Str::random(9),
            'role_id' => Str::random(3),
            'image' => Str::random(20),
        ]);
    }
}
