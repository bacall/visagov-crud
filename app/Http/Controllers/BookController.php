<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $books= Book::orderBy('id', 'desc')->get();
        
        return view('crud.index', compact( 'books') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        return view('crud.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        request()->validate(Book::$rules);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
        $books= Book::orderBy('id', 'desc')->get();
        return redirect()->route('viewBooks');
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $book = Book::find($id);
        return view('crud.edit', compact( 'book') );

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        request()->validate(Book::$rules);
        $book = Book::find($request->id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
        $books= Book::orderBy('id', 'desc')->get();
        return redirect()->route('viewBooks', compact( 'books'));
        //return view('crud.index', compact( 'books') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id)->delete();
        $books= Book::orderBy('id', 'desc')->get();
        return redirect()->route('viewBooks', compact( 'books'));
    }
}
