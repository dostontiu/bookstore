<?php

namespace App\Http\Controllers;

use App\Author;
use App\Books;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        $authors = Author::all();
        return view('frontend.author.index', ['books' => $books, 'authors' => $authors]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);
        if ($author == null) return view('errors.404');
        $books = DB::table('books')->where('author_id', $id)->get();;
        $authors = Author::all();
        $asides = DB::table('books')->orderBy('name', 'desc')->limit(3)->get();
        return view('frontend.author.show', ['author' => $author, 'books' => $books, 'authors' => $authors, 'asides' => $asides]);
    }

}
