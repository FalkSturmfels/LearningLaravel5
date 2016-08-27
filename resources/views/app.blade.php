<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Referencing mixed final css -->
    {{ Html::style('css/final.css') }}

</head>
<body>

@include('partials.mainmenu')

<div class="container">

    @include('flash::message')

    @yield('content')
</div>
<!-- Referencing mixed final js -->
{{Html::script('js/final.js')}}

@yield('footer')


<script>
    $("#flash-overlay-modal").modal();
</script>

</body>
</html>