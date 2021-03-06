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

        <div class="container" style="margin-top: 30px">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                Open Modal
            </button>

            <!-- Modal -->
            <modal>
                <template slot=title>
                    My awesome title
                </template>

                    sdfsdfsdfsdfsdf


                <template slot=footer>

                </template>
            </modal>
            <p></p>

            <tabs>
                <tab title="Title 1" :seleted="true">
                    <span>Content 1 1 1 1 1 1 </span>
                </tab>

                <tab title="Title 2">
                    <span>Content 2 2 2 2 2 2 2</span>
                </tab>

                <tab title="Title 3">
                    <span>Content 3 3 3 3 3 3 3 3</span>
                </tab>
            </tabs>

            <input-text></input-text>
            <span v-if="alert">Your text has been saved</span>
        </div>



        <script src="{{ elixir('js/app.js') }}"></script>



    </body>

</html>
