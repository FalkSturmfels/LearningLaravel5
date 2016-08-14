<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{ Html::style('bootstrap/css/bootstrap.min.css') }}
</head>
<body>
<div class="container">

    @if(Session::has('flash_message'))
        <div class="alert alert-success {{Session::has('flash_message_important') ? "alert-important" : ""}}
                fade in">
            @if(Session::has('flash_message_important'))
                <button class="close" data-dismiss="alert" aria-label="close" aria-hidden="true">&times;</button>
            @endif
            {{session("flash_message")}}
        </div>
    @endif

    @yield('content')
</div>

@yield('footer')

<script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
        crossorigin="anonymous"></script>

<script>
    $('div.alert').not('alert-important').delay(3000).fadeOut(300)
</script>

<!-- Referencing Bootstrap JS that is hosted locally -->
{{ Html::script('bootstrap/js/bootstrap.min.js') }}
</body>
</html>