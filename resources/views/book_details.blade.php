@extends('book-layout')
@section('content')
@section('title', $title . ' Details')
<head>
    <title>@yield('title', 'Default Title')</title>
    <!-- Other head elements -->
</head>
    <h1>{{ $page }}</h1>
    @isset($book)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->description }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <p>No Book Found</p>
    @endisset
@endsection