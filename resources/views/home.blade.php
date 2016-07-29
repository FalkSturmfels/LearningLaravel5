@extends('App')

@section('content')

    <h1>Home</h1>

        <ul>
            <li><a href="{{ url('/logout')}}">logout</a></li>
            <li><a href="{{ url('/articles')}}">articles</a></li>
        </ul>


@endsection

