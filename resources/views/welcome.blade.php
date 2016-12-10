<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    </head>
    <body>

        <div class="container">

            <tasks-list title="My tasks"></tasks-list>
            <tasks-list title="Comleted tasks"></tasks-list>

        </div>

        <script src="{{ elixir('js/app.js') }}"></script>



    </body>

</html>
