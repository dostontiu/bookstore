<?php

namespace App\Http\Controllers;

use App\Author;
use App\Books;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::paginate(5);
        $categories = Category::all();
        $authors = Author::all();
//        dd($books);
        return view('frontend.book.index', ['books' => $books, 'categories' => $categories, 'authors' => $authors]);
    }

    public function search(Request $request)
    {
        $search = $request->get('q');
//        return 'ok';
        $books = Books::where('name', 'like', '%'.$search.'%')->paginate(5);
        $categories = Category::all();
        $authors = Author::all();
//        dd($books);
        return view('frontend.book.index', ['books' => $books, 'categories' => $categories, 'authors' => $authors]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Books::find($id);
        $books = DB::table('books')->limit(3)->get();;
        $categories = Category::all();
        $asides = DB::table('books')->orderBy('name', 'desc')->limit(3)->get();
        return view('frontend.book.show', ['book' => $book, 'books' => $books, 'categories' => $categories, 'asides' => $asides]);
    }

    public function getDownload($id, $name){

//        return $id.' '. $name.'ha = '.auth()->id();
        if (Auth::check()==false){
            return redirect('login');
        }
        $order = Order::create([
           'book_id' => $id,
           'user_id' => auth()->id(),
        ]);

        $file = public_path()."/upload/".$name.'.pdf';
        if (file_exists($file) and $order->save())
        {
//            $order = false;
            return Response::download($file, $name);
        }
        else
        {
            exit('Requested file does not exist on our server!');
        }
//        $headers = array('Content-Type: application/pdf',);
//        return Response::download($file, $name.'.pdf', $name);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'cost' => 'required',
            'discount' => 'required',
//            'author_id' => 'required',
//            'category_id' => 'required',
//            'language_id' => 'required',
            'published' => 'required',
        ]);
        $book = new Books();
        $book->name = $request->name;
        $book->photo= $request->photo;
        $book->cost = $request->cost;
        $book->discount = $request->discount;
        $book->author_id = 1;
        $book->category_id = 1;
        $book->language_id = 1;
        $book->published = $request->published;
        $book->save();
        redirect('/book/'.$book->id);
//        insert into authors (name, surname, photo, birth_date, died_date, birth_place) values('Kimdir', 'Kimdirov', 'rasm', '11/11/2015','11/11/2014','Toshkent' );

    }
}
