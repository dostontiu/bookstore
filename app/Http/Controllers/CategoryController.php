<?php

namespace App\Http\Controllers;

use App\Books;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        $categories = Category::all();
        return view('frontend.category.index', ['books' => $books, 'categories' => $categories]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if ($category == null) return view('errors.404');
        $books = DB::table('books')->where('category_id', $id)->get();;
        $categories = Category::all();
        $asides = DB::table('books')->orderBy('name', 'desc')->limit(3)->get();
        return view('frontend.category.show', ['category' => $category, 'books' => $books, 'categories' => $categories, 'asides' => $asides]);
    }

}
