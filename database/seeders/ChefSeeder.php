<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chef;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chef::create([
            'name' => 'John Doe',
            'specialty' => 'French Cuisine',
            'bio' => 'John has over 20 years of experience, specializing in classical French cooking. He has worked in Michelin-starred restaurants across Europe.',
            'profile_image' => 'chefs/team-1.jpg',  // Ensure this image exists in the storage directory
            'restaurant_id' => 1,  // Make sure this corresponds to an existing restaurant_id
        ]);

        Chef::create([
            'name' => 'Emily Harris',
            'specialty' => 'Italian Cuisine',
            'bio' => 'With a passion for authentic Italian dishes, Emily has honed her skills in both Italy and the United States, focusing on fresh pasta and traditional sauces.',
            'profile_image' => 'chefs/team-2.jpg',
            'restaurant_id' => 2,
        ]);

        Chef::create([
            'name' => 'Michael Lee',
            'specialty' => 'Sushi & Japanese Cuisine',
            'bio' => 'Michael is a sushi master who has worked at top restaurants in Tokyo and Los Angeles, specializing in traditional sushi-making techniques and high-end ingredients.',
            'profile_image' => 'chefs/team-3.jpg',
            'restaurant_id' => 3,
        ]);

        Chef::create([
            'name' => 'David Smith',
            'specialty' => 'Steak & Grills',
            'bio' => 'A master of grilling, David has worked at some of the best steakhouses in the world, known for his perfectly cooked steaks and dedication to quality meat.',
            'profile_image' => 'chefs/team-4.jpg',
            'restaurant_id' => 5,
        ]);
    }
}
