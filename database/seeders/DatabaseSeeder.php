<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Writer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for($i=1;$i<4;$i++){
            Writer::factory()->create([
               'writer_profile_picture_link' => 'avatars/avatar'.$i.'.jpg' 
            ]);
        }
        

        for($i=1;$i<7;$i++){
            Article::factory()->create([
                'image_link' => 'article-img/img'.$i.'.jpg'
            ]);
        }
    }
}
