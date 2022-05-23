<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ambil data dari database
        //1. menggunakan model eloquent
        //2. menggunakan query builder

        $books = Book::all();
        // $books = DB::table('books')->get();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $author = $request->author;
        $description = $request->description;
        $stock = $request->stock;

        $book = new Book();
        $book->title = $title;
        $book->author = $author;
        $book->description = $description;
        $book->stock = $stock;

        $book->save();

        return redirect()
            ->to(route('books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
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
        $title = $request->title;
        $author = $request->author;
        $description = $request->description;
        $stock = $request->stock;

        $book->title = $title;
        $book->author = $author;
        $book->description = $description;
        $book->stock = $stock;

        $book->save();

        return redirect()
            ->to(route('books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
