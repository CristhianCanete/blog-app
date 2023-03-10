<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = Post::factory(100)->create();
        foreach ($posts as $post){
            Image::factory(1)->create([
                'imagiable_id' => $post->id,
                'imagiable_type' => Post::class
            ]);
        }

    }
}
