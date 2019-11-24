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
            'ip' => '127.0.1.1',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1005,
            'movie_id' => 1000,
            'ip' => '127.0.1.2',
            'liked' => true
        ]);

        \App\Models\LikeDislike::create([
            'id' => 1001,
            'movie_id' => 1001,
            'ip' => '127.0.1.3',
            'liked' => true
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1006,
            'movie_id' => 1001,
            'ip' => '127.0.1.4',
            'liked' => false
        ]);

        \App\Models\LikeDislike::create([
            'id' => 1002,
            'movie_id' => 1002,
            'ip' => '127.0.1.5',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1007,
            'movie_id' => 1002,
            'ip' => '127.0.1.6',
            'liked' => true
        ]);

        \App\Models\LikeDislike::create([
            'id' => 1003,
            'movie_id' => 1003,
            'ip' => '127.0.1.7',
            'liked' => true
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1008,
            'movie_id' => 1003,
            'ip' => '127.0.1.8',
            'liked' => false
        ]);

        \App\Models\LikeDislike::create([
            'id' => 1004,
            'movie_id' => 1004,
            'ip' => '127.0.1.9',
            'liked' => false
        ]);
        \App\Models\LikeDislike::create([
            'id' => 1009,
            'movie_id' => 1004,
            'ip' => '127.0.1.10',
            'liked' => true
        ]);
    }
}
