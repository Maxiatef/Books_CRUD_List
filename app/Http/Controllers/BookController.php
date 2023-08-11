<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::orderBy('id', 'desc')->paginate(5);
        $page = "Books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]); //resource/views/''
    }

    public function show(){
        $page = "create book";
        return view('create-book', ['page' => $page]);
    }

    public function create(Request $request){
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description
            //"pic" => "test.png"
        ]);
        return redirect()->route('books');
    }

    public function destroy($book){
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }    

    public function showBook($book){
        $book = Book::findOrFail($book);
        $title = $book->title;
        $page = $title . " Details";
        return view('book_details', [
            "page" => $page,
            "book" => $book,
            "title" => $title
        ]);
        // dd($book);
        //task: return view();
    }

}
