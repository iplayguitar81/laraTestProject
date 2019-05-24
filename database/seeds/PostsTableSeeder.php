<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //create 10 posts...
      factory(App\Post::class, 50)->create();

    }
}
