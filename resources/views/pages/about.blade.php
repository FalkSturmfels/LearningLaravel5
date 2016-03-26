@extends('app')

@section('content')
<h1>About </h1>

@if(count($people) > 0)
<h3>People I like:</h3>

<ul>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</ul>
@endif

<p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
    sed diam nonumy eirmod tempor invidunt ut labore et dolore<br>
    magna aliquyam erat, sed diam voluptua. At vero eos et accusam<br>
    et justo duo dolores et ea rebum. Stet clita kasd gubergren,<br>
    no sea takimata sanctus est Lorem ipsum dolor sit amet.<br>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,<br>
    sed diam nonumy eirmod tempor invidunt ut labore et dolore<br>
    magna aliquyam erat, sed diam voluptua.<br>
    At vero eos et accusam et justo duo dolores et ea rebum.<br>
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem <br>
    ipsum dolor sit amet.
</p>
@stop