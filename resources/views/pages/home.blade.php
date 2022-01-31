@extends('layouts.main-layout')
@section('content')
    <h3>
        <a href="{{route('create')}}">Create</a>
    </h3>
    <h1>List:</h1>
    <ul>
        @foreach ($comics as $comic)
        <li><a href="{{route('detail', $comic -> id)}}">{{$comic -> title}}</a> 
          - {{$comic -> relese_date}}
          - <a href="{{route('edit', $comic -> id)}}">Edit</a>
          - <a href="{{route('delete', $comic -> id)}}">Delete</a>
        </li>    
        @endforeach
    </ul>
@endsection