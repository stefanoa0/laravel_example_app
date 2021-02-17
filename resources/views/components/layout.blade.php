<html>
    <head>
        <title>Laravel - Example - APP</title>
            <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

            
    </head>
    <body>
        <nav class="navbar navbar-inverse blue darken-1">
            <a href="#" class="brand-logo">Photos</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ URL::to('photos') }}">View All photos</a></li>
                <li><a href="{{ URL::to('photos/create') }}">Create a photo</a>
            </ul>
        </nav>
        <div class="container">
            {{ $slot }}
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                M.FormSelect.init(elems, []);
            });
        </script>
    </body>
</html>