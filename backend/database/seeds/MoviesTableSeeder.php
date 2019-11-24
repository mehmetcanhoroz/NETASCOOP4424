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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales elit venenatis diam sollicitudin, ut venenatis justo ultricies. Aliquam non ipsum tortor. In commodo massa in arcu sodales sodales. Morbi tincidunt pharetra tellus nec tristique. Proin posuere lorem et lacus viverra ultricies. Praesent aliquam, erat id semper egestas, sapien augue congue diam, eu blandit enim ipsum id risus. Nunc odio ex, auctor eu pharetra eget, hendrerit vitae lorem. Nam lobortis finibus risus, sit amet feugiat metus dapibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor lectus at lacus lobortis, eget semper felis sodales. Vivamus dignissim mi ac risus pretium posuere.',
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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales elit venenatis diam sollicitudin, ut venenatis justo ultricies. Aliquam non ipsum tortor. In commodo massa in arcu sodales sodales. Morbi tincidunt pharetra tellus nec tristique. Proin posuere lorem et lacus viverra ultricies. Praesent aliquam, erat id semper egestas, sapien augue congue diam, eu blandit enim ipsum id risus. Nunc odio ex, auctor eu pharetra eget, hendrerit vitae lorem. Nam lobortis finibus risus, sit amet feugiat metus dapibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor lectus at lacus lobortis, eget semper felis sodales. Vivamus dignissim mi ac risus pretium posuere.',
            'pg' => 13,
            'duration' => 127,
            'imdb_score' => 5.7,
            'meta_score' => 5.7,
            'my_score' => 5.7,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1002,
            'title' => 'The Fast and the Furious: Tokyo Drift',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales elit venenatis diam sollicitudin, ut venenatis justo ultricies. Aliquam non ipsum tortor. In commodo massa in arcu sodales sodales. Morbi tincidunt pharetra tellus nec tristique. Proin posuere lorem et lacus viverra ultricies. Praesent aliquam, erat id semper egestas, sapien augue congue diam, eu blandit enim ipsum id risus. Nunc odio ex, auctor eu pharetra eget, hendrerit vitae lorem. Nam lobortis finibus risus, sit amet feugiat metus dapibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor lectus at lacus lobortis, eget semper felis sodales. Vivamus dignissim mi ac risus pretium posuere.',
            'pg' => 13,
            'duration' => 128,
            'imdb_score' => 5.8,
            'meta_score' => 5.8,
            'my_score' => 5.8,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1003,
            'title' => 'Fast & Furious',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales elit venenatis diam sollicitudin, ut venenatis justo ultricies. Aliquam non ipsum tortor. In commodo massa in arcu sodales sodales. Morbi tincidunt pharetra tellus nec tristique. Proin posuere lorem et lacus viverra ultricies. Praesent aliquam, erat id semper egestas, sapien augue congue diam, eu blandit enim ipsum id risus. Nunc odio ex, auctor eu pharetra eget, hendrerit vitae lorem. Nam lobortis finibus risus, sit amet feugiat metus dapibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor lectus at lacus lobortis, eget semper felis sodales. Vivamus dignissim mi ac risus pretium posuere.',
            'pg' => 13,
            'duration' => 129,
            'imdb_score' => 5.9,
            'meta_score' => 5.9,
            'my_score' => 5.9,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
        \App\Models\Movie::create([
            'id' => 1004,
            'title' => 'Fast Five',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales elit venenatis diam sollicitudin, ut venenatis justo ultricies. Aliquam non ipsum tortor. In commodo massa in arcu sodales sodales. Morbi tincidunt pharetra tellus nec tristique. Proin posuere lorem et lacus viverra ultricies. Praesent aliquam, erat id semper egestas, sapien augue congue diam, eu blandit enim ipsum id risus. Nunc odio ex, auctor eu pharetra eget, hendrerit vitae lorem. Nam lobortis finibus risus, sit amet feugiat metus dapibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor lectus at lacus lobortis, eget semper felis sodales. Vivamus dignissim mi ac risus pretium posuere.',
            'pg' => 13,
            'duration' => 121,
            'imdb_score' => 5.1,
            'meta_score' => 5.1,
            'my_score' => 5.1,
            'release_date' => \Carbon\Carbon::now()->toDateString()
        ]);
    }
}
