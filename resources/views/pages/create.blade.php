@extends('layouts.main-layout')
@section('content')
    <h1>Create New Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('store')}}" method="POST">
        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="Title"><br>
        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="Author"><br>
        <label for="release">Release_date:</label>
        <input type="date" name="relese_date" placeholder="Release date"><br>
        <input type="submit" value="Create">
    </form>
@endsection