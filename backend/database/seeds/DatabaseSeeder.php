<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(MovieImagesTableSeeder::class);
        $this->call(MovieTrailersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LikeDislikesTableSeeder::class);
    }
}
