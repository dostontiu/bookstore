<?php

namespace App\Http\Controllers;

use App\Author;
use App\Books;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        return view('backend.book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('backend.book.create', ['categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'name'=>'required',
            'description'=> 'required|max:100',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'required|file|mimes:pdf',
            'cost' => 'required|integer',
//            'discount' => 'required|integer',
            'author_id'=>'required|integer',
            'category_id'=>'required|integer',
            'language_id'=>'required|integer',
            'published'=>'required|date',
        ]);

        $photo = $request->file('photo');
        $file = $request->file('file');
        $photo_name = rand().'.'.$photo->getClientOriginalExtension();
        $file_name = $request->name.'.'.$file->getClientOriginalExtension();
        $photo->move(public_path('images'), $photo_name);
        $file->move(public_path('upload'), $file_name);

        $book = new Books([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'photo'=> $photo_name,
            'cost'=> $request->get('cost'),
            'discount'=> $request->get('discount'),
            'author_id'=> $request->get('author_id'),
            'category_id'=> $request->get('category_id'),
            'language_id'=> $request->get('language_id'),
            'translator_id' => 1,
            'published'=> $request->get('published'),
        ]);
        $book->save();
        return redirect('/admin/books')->with('success', 'Yangi kitob qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::find($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('backend.book.show', ['book' => $book, 'categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::find($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('backend.book.edit', ['book' => $book, 'categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required|max:100',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'file|mimes:pdf',
            'cost' => 'required|integer',
//            'discount' => 'required|integer',
            'author_id'=>'required|integer',
            'category_id'=>'required|integer',
            'language_id'=>'required|integer',
            'published'=>'required|date',
        ]);

        $photo = $request->file('photo');
        if ($photo!=''){
            $photo_name = rand().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('images'), $photo_name);
        } else {
            $photo_name = $request->old_photo;
        }

        $file = $request->file('file');
        if ($file!=''){
            $file_name = $request->name.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload'), $file_name);
        } else {
            rename(public_path('upload/'.$request->old_file.'.pdf'), public_path('upload/'.$request->name.'.pdf'));
        }

        $book = Books::find($id);
        $book->name = $request->get('name');
        $book->description = $request->get('description');
        $book->photo = $photo_name;
        $book->cost = $request->get('cost');
        $book->discount = $request->get('discount');
        $book->author_id = $request->get('author_id');
        $book->category_id = $request->get('category_id');
        $book->language_id = $request->get('language_id');
        $book->translator_id = 1;
        $book->published = $request->get('published');
        $book->save();
        return redirect('/admin/books')->with('success', 'Tahrir yakunlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
