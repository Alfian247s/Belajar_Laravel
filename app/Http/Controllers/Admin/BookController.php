<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('admin.book.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'author'=>'required',
            'year'=>'required',
        ]);
        Book::create($request->all());
        return redirect()->route('book-index');
    }
    public function index(){
        $book=Book::all();
        return view('admin.book.index', compact('book'));
    }
    public function destroy($id){
        $book=Book::where ("id",$id)->first();
        $book->delete();
        return redirect()->route('book-index');
    }
    public function edit($id){
        $book=Book::where ("id",$id)->first();
        return view("admin.book.edit", compact('book'));
    }
    public function update(Request $request, $id){
        $book=Book::where("id", $id)->first();
        $book->update($request->all());
        return redirect()->route("book-index");
    }
}
