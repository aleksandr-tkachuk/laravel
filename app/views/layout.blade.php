<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @section('title')
                Home
            @show
        </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
    </head>
    <body>
    <nav class="navbar">
        @section('button')
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control is-size-4 has-text-success">
                        @if (Auth::check())
                            {{Auth::user()->name}}
                        @endif
                    </p>
                    <p class="control">
                        <a class="button is-success" href="{{URL::to('auth/logout')}}">
                            <span class="icon">
                                <i class="fa fa-sign-out"></i>
                            </span>
                            <span>
                                Logout me
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @show
    </nav>
        <div class="container">
            <div class="column"></div>
            <div class="columns has-text-centered">
                <div class="column">
                    <p class="title is-3 is-spaced">
                    </p>
                </div>
            </div>
            <div class="column"></div>
        </div>-

        <div class="container">
            <div class='content has-text-centered'>
                @section('content')
                @show
            </div>
        </div>
    </body>
</html>

