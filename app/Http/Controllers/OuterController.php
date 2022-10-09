<?php

namespace App\Http\Controllers;
use App\Models\Book;


use Illuminate\Http\Request;

class OuterController extends Controller
{
    public function homeuser()
    {
        $databuku = Book::all();
        return view('user-home', [
            'buku'=> $databuku
        ]);
    }

    public function detailbukuuser($id){
        $bukudetail = Book::where('ID', $id)->first();
        return view('detail/book-detail', [
            'buku' => $bukudetail
        ]);
    }
}
