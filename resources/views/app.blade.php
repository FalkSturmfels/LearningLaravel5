<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{ Html::style('bootstrap/css/bootstrap.min.css') }}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">

    @include('flash::message')

    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

@yield('footer')

<!-- Referencing Bootstrap JS that is hosted locally -->
{{ Html::script('bootstrap/js/bootstrap.min.js') }}

<script>
    $("#flash-overlay-modal").modal();
</script>

</body>
</html>