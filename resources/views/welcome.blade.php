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
            <tasks :list="{{ $tasks }}"></tasks>
        </div>

        <template id="tasks-template">
            <div>
                <h1>My tasks</h1>

                <ul class="list-group">
                    <li class="list-group-item" v-for="task in list">
                        @{{ task.body }}
                    </li>
                </ul>
            </div>
        </template>

        <script src="https://unpkg.com/vue@2.1.4/dist/vue.js"></script>
        <script src="{{ elixir('js/app.js') }}"></script>


    </body>

</html>
