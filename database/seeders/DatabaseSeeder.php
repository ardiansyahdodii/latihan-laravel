<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed User
        // User::create([
        //     'name' => 'Dodi Ardiansyah',
        //     'email' => 'ardiansyahdodii@gmail',
        //     'password' => bcrypt('password')
        // ]);


        // Seed Category
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Seed Post
        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero dignissimos deleniti animi incidunt impedit perspiciatis quibusdam ullam quis reiciendis.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, reiciendis. Pariatur distinctio magni enim voluptatum, asperiores atque dolore nesciunt eos nemo libero eveniet vitae est suscipit sit facilis. Porro, odit?</p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero dignissimos deleniti animi incidunt impedit perspiciatis quibusdam ullam quis reiciendis.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, reiciendis. Pariatur distinctio magni enim voluptatum, asperiores atque dolore nesciunt eos nemo libero eveniet vitae est suscipit sit facilis. Porro, odit?</p>',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        Post::create([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero dignissimos deleniti animi incidunt impedit perspiciatis quibusdam ullam quis reiciendis.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, reiciendis. Pariatur distinctio magni enim voluptatum, asperiores atque dolore nesciunt eos nemo libero eveniet vitae est suscipit sit facilis. Porro, odit?</p>',
            'category_id' => 2,
            'user_id' => 2,
        ]);
        Post::create([
            'title' => 'Judul Post keempat',
            'slug' => 'judul-post-keempat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero dignissimos deleniti animi incidunt impedit perspiciatis quibusdam ullam quis reiciendis.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, reiciendis. Pariatur distinctio magni enim voluptatum, asperiores atque dolore nesciunt eos nemo libero eveniet vitae est suscipit sit facilis. Porro, odit?</p>',
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }
}
