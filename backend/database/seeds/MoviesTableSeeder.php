<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->float('imdb_score');
            $table->float('my_score');
        */
        \App\Models\Movie::create([
            'id' => 1000,
            'title' => 'Fast and Furious',
            'description' => 'Description',
            'pg' => 13,
            'duration' => 120,
            'imdb_score' => 5.6,
            'meta_score' => 5.6,
            'my_score' => 5.6,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1001,
            'title' => '2 Fast 2 Furious',
            'description' => 'Description',
            'pg' => 13,
            'duration' => 120,
            'imdb_score' => 5.6,
            'meta_score' => 5.6,
            'my_score' => 5.6,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1002,
            'title' => 'The Fast and the Furious: Tokyo Drift',
            'description' => 'Description',
            'pg' => 13,
            'duration' => 120,
            'imdb_score' => 5.6,
            'meta_score' => 5.6,
            'my_score' => 5.6,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1003,
            'title' => 'Fast & Furious',
            'description' => 'Description',
            'pg' => 13,
            'duration' => 120,
            'imdb_score' => 5.6,
            'meta_score' => 5.6,
            'my_score' => 5.6,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1004,
            'title' => 'Fast Five',
            'description' => 'Description',
            'pg' => 13,
            'duration' => 120,
            'imdb_score' => 5.6,
            'meta_score' => 5.6,
            'my_score' => 5.6,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
    }
}
