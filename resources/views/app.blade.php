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
    @yield('content')
</div>

@yield('footer')

<script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
        crossorigin="anonymous"></script>

<!-- Referencing Bootstrap JS that is hosted locally -->
{{ Html::script('js/bootstrap.min.js') }}
</body>
</html>