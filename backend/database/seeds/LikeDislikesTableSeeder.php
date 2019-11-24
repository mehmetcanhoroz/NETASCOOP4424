<?php

use Illuminate\Database\Seeder;

class LikeDislikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LikeDislike::create([
            'id' => 1000,
            'movie_id' => 1000,
            'ip' => '127.0.0.1',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1001,
            'movie_id' => 1001,
            'ip' => '127.0.0.1',
            'liked' => true
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1002,
            'movie_id' => 1002,
            'ip' => '127.0.0.1',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1003,
            'movie_id' => 1003,
            'ip' => '127.0.0.1',
            'liked' => true
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1005,
            'movie_id' => 1003,
            'ip' => '127.0.0.2',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1006,
            'movie_id' => 1003,
            'ip' => '127.0.0.3',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1007,
            'movie_id' => 1003,
            'ip' => '127.0.0.4',
            'liked' => true
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1004,
            'movie_id' => 1004,
            'ip' => '127.0.0.1',
            'liked' => false
        ]);
    }
}
