@extends('layouts.main-layout')
@section('content')
    <h1>List:</h1>
    <ul>
        @foreach ($comics as $comic)
        <li><a href="{{route('detail', $comic -> id)}}">{{$comic -> title}}</a> 
          - {{$comic -> relese_date}}
        </li>    
        @endforeach
    </ul>
@endsection