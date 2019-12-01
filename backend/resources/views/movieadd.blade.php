<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Add Movie</title>
    <meta name="description" content="Add Movie">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        .container1 input[type=text] {
            padding: 5px 0px;
            margin: 5px 5px 5px 0px;
        }

        .container1 .add_form_field, .container1 .add_form_field_trailer {
            background-color: #1c97f3;
            border: none;
            color: white;
            padding: 8px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: 1px solid #186dad;
        }

        .container1 input {
            border: 1px solid #1c97f3;
            width: 260px;
            height: 20px;
            margin-bottom: 14px;
        }

        .container1 .delete {
            background-color: #fd1200;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
<!--

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
-->

<div class="container">
    <div class="row">
        <form action="/movies" method="post">
            {{ csrf_field() }}

            Movie Title:<br>
            <input class="form-control"  type="text" name="title">
            <br>
            Movie Description:<br>
            <textarea class="form-control"  name="description"></textarea>
            <br>
            PG:<br>
            <input class="form-control"  type="text" name="pg">
            <br>
            Duration:<br>
            <input class="form-control"  type="text" name="duration">
            <br>
            my_score:<br>
            <input class="form-control"  type="text" name="my_score">
            <br>
            imdb_score:<br>
            <input class="form-control"  type="text" name="imdb_score">
            <br>
            meta_score:<br>
            <input class="form-control"  type="text" name="meta_score">
            <br>
            release_date:<br>
            <input class="form-control"  type="text" name="release_date" placeholder="31-12-2019">

            <hr>


            <div class="container1">
                <button class="add_form_field">Add New Image &nbsp; <span
                        style="font-size:16px; font-weight:bold;">+ </span>
                </button>
                <button class="add_form_field_trailer">Add New Trailer &nbsp; <span
                        style="font-size:16px; font-weight:bold;">+ </span>
                </button>
                <p>Images</p>
                <div class="containerImages"><input type="text" name="images[]" required></div>
                <p>Trailers</p>
                <div class="containerTrailers"><input type="text" name="trailers[]" required></div>
            </div>
            <hr>

            <br><br>
            <input type="submit" value="Submit">

            <script>
                $(document).ready(function () {
                    var max_fields = 99;
                    var max_fields_trailers = 99;
                    var wrapper = $(".containerImages");
                    var wrapper_trailer = $(".containerTrailers");
                    var add_button = $(".add_form_field");
                    var add_button_trailer = $(".add_form_field_trailer");

                    var x = 1;
                    var x_trailers = 1;
                    $(add_button).click(function (e) {
                        e.preventDefault();
                        if (x < max_fields) {
                            x++;
                            $(wrapper).append('<div><input type="text" name="images[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
                        } else {
                            alert('You Reached the limits')
                        }
                    });
                    $(add_button_trailer).click(function (e) {
                        e.preventDefault();
                        if (x_trailers < max_fields_trailers) {
                            x_trailers++;
                            $(wrapper_trailer).append('<div><input type="text" name="trailers[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
                        } else {
                            alert('You Reached the limits')
                        }
                    });

                    $(wrapper).on("click", ".delete", function (e) {
                        e.preventDefault();
                        $(this).parent('div').remove();
                        x--;
                    });

                    $(wrapper_trailer).on("click", ".delete", function (e) {
                        e.preventDefault();
                        $(this).parent('div').remove();
                        x_trailers--;
                    })
                });
            </script>

        </form>
    </div>
</div>
</body>
</html>
