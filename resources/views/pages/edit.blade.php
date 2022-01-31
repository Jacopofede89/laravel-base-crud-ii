@extends('layouts.main-layout')
@section('content')
    <h1>Edit Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('update', $comic -> id)}}" method="POST">
        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Title" value="{{$comic -> title}}"><br>
        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="Author" value="{{$comic -> author}}"><br>
        <label for="release">Release_date:</label>
        <input type="date" name="relese_date" placeholder="Release date" value="{{$comic -> relese_date}}"><br>
        <input type="submit" value="Update">
    </form>
@endsection