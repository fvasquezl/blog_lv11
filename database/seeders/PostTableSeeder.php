<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        Category::truncate();
        $category = new Category();
        $category->name= 'Category 1';
        $category->save();

        $category = new Category();
        $category->name= 'Category 2';
        $category->save();

        Tag::truncate();
        $tag = new Tag();
        $tag->name= 'Tag 1';
        $tag->save();

        $tag = new Tag();
        $tag->name= 'Tag 2';
        $tag->save();


        $post = new Post();
        $post->title = "Mi primer post";
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->published_at = Carbon::now();
        $post->category_id =1;
        $post->save();

        $post = new Post();
        $post->title = "Mi segunto post";
        $post->excerpt = "Extracto de mi segunto post";
        $post->body = "Contenido de mi segunto post";
        $post->published_at = Carbon::now()->subDays(1);
        $post->category_id =1;
        $post->save();

        $post = new Post();
        $post->title = "Mi tercer post";
        $post->excerpt = "Extracto de mi tercer post";
        $post->body = "Contenido de mi tercer post";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id =2;
        $post->save();

        $post = new Post();
        $post->title = "Mi cuarto post";
        $post->excerpt = "Extracto de mi cuarto post";
        $post->body = "Contenido de mi cuarto post";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id =2;
        $post->save();

    }
}
