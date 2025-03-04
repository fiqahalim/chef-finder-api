<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interview;

class InterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Interview::create([
            'chef_id' => 1,
            'interview_excerpt' => 'Chef John started his culinary journey at the age of 16 in a small local kitchen...',
            'start_story' => 'Chef John discovered his passion for cooking when he was 16 years old. He started by working at his local diner, eventually progressing to top restaurants.',
            'michelin_experience' => 'Chef John has worked at Le Bernardin, a Michelin 3-star restaurant, where he learned under some of the finest chefs in the world.',
            'previous_work' => 'Before joining us, Chef John worked at several Michelin-starred restaurants, including The French Laundry and Per Se.',
        ]);

        Interview::create([
            'chef_id' => 2,
            'interview_excerpt' => 'Chef Emma shares her story of discovering a love for food in her family kitchen...',
            'start_story' => 'Emma discovered her love for cooking during her high school years. Inspired by her family’s rich culinary traditions, she started experimenting with recipes at home.',
            'michelin_experience' => 'Emma was head chef at a Michelin-starred restaurant in Paris, where she refined her skills in fine dining and developed her unique style.',
            'previous_work' => 'Emma has worked at several renowned restaurants in Europe, including Gagnaire in Paris and Alain Ducasse at the Plaza Athénée.',
        ]);

        Interview::create([
            'chef_id' => 3,
            'interview_excerpt' => 'Chef Mark’s journey into the culinary world started with humble beginnings...',
            'start_story' => 'Mark’s love for food began when he worked in his mother’s bakery as a teenager. His curiosity led him to culinary school, where he honed his skills in French cuisine.',
            'michelin_experience' => 'He worked as a sous-chef at a Michelin-starred restaurant in London, where he perfected his skills in French and Italian cooking.',
            'previous_work' => 'Before joining us, Chef Mark worked at The Ledbury in London and other Michelin-acclaimed restaurants.',
        ]);

        Interview::create([
            'chef_id' => 4,
            'interview_excerpt' => 'Chef Sarah’s interview dives into her experience at a Michelin 2-star restaurant...',
            'start_story' => 'Chef Sarah’s passion for culinary arts grew out of her love for local ingredients and sustainability. She began by studying at a renowned cooking school.',
            'michelin_experience' => 'Sarah had the honor of working under the guidance of chefs at two Michelin 2-star restaurants in Italy, where she gained invaluable experience in modern European cuisine.',
            'previous_work' => 'Before joining us, Sarah worked at several Italian Michelin-starred restaurants, including Da Vittorio in Bergamo.',
        ]);
    }
}
