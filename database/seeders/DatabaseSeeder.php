<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UsersTableSeeder::class);

        $this->call(PostsTableSeeder::class);
        $this->call(PostImageTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ThumbsTableSeeder::class);
        $this->call(SharesTableSeeder::class);
        $this->call(FeedsTableSeeder::class);
        $this->call(UserImageTableSeeder::class);
        $this->call(RelationsTableSeeder::class);
        $this->call(MessageTableSeeder::class);
    }
}
