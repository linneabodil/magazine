<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Category;
use App\Ad;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // detta körs vid db:seed
      // factory(Article::class,10)->create();
      // factory(Category::class,5)->create();
      // factory(Ad::class,5)->create();
      // factory(User::class,5)->create();
    }
}
