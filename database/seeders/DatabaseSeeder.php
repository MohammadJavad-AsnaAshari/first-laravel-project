<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

//        User::factory(10)->create()->each(function ($user) {
//            $user->articles()->saveMany(Article::factory(rand(1, 6))->make());
//        });

        Category::factory(5)->create();

//        foreach ()
//            Article::factory(rand(1, 6))->create([
//                'user_id' => User::factory()->create()->id
//            ]);

//        $this->call([
//            UserTableSeeder::class,
//            ArticlesTableSeeder::class
//        ]);
    }
}
