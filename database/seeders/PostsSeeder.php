<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Writer;
use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $title1 = ['Machine Learning','Deep Learning','Natural Language Processing'];

        $writer1 = Writer::where('division', 'Spesialis Data Science')->first();
        $category1 = Category::where('id', 1)->first();

        $photo_path1 = [
            'assets/post/item1.jpg',
            'assets/post/item2.jpg',
            'assets/post/item3.jpg'
        ];

        for($i = 0; $i < 3; $i++) {
            Post::create([
                'title' => $faker->name,
                'writer_id' => $writer1->id,
                'category_id' => $category1->id,
                'title' => $title1[$i],
                'body' => implode("\n\n", $faker->paragraphs(3)),
                'asset_path' => $photo_path1[$i]
            ]);
        }

        $writer1 = Writer::where('division', 'Spesialis Network Security')->first();
        $category1 = Category::where('id', 2)->first();

        $photo_path2 = [
            'assets/post/item4.jpg',
            'assets/post/item5.jpg',
            'assets/post/item6.jpg'
        ];

        $title2 = ['Network Security Protocols','Skills for Ethical Hacker','User Interface'];

        for($i = 0; $i < 3; $i++) {
            Post::create([
                'title' => $faker->name,
                'writer_id' => $writer1->id,
                'category_id' => $category1->id,
                'title' => $title2[$i],
                'body' => implode("\n\n", $faker->paragraphs(3)),
                'asset_path' => $photo_path2[$i]
            ]);
        }
    }
}
