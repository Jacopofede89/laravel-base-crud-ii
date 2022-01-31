@extends('layouts.main-layout')
@section('content')

    <h3><a href="{{route('home', $comic -> id)}}">List</a></h3>
    <h3>{{$comic -> title}}</h3>
    <h5>{{$comic -> author}}</h5>
    <h5>{{$comic -> relese_date}}</h5>
@endsection