@extends('book-layout')
@section('project-name')
    Project Test
@endsection
@section('title')
    Create Book
@endsection
@section('content')
<style>
    #btn{
        background-color: beige;
        color: black;
    }
</style>
    <h1>{{ $page }}</h1>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputText">title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="exampleInputText">description</label>
            <textarea class="form-control" name="description" placeholder="Enter Description" cols="30" rows="8"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
