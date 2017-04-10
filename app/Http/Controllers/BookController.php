<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index',compact('books'));
        //de toegevoegde boeken uit de database worden getoond in de index
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
        $this->validate($request,[
            'book_id' => 'required|max:255',
            'book_isbn' => 'required|max:255',
            'book_title' => 'required|max:255',
            'book_author_id' => 'required|max:255',
            'book_author_name' => 'required|max:255',
            'book_colorcat' => 'required|max:255',
            'book_dis' => 'required|max:255',
        ]);

        $book = Books::create([
            'book_id' => $request ['book_id'],
            'book_isbn' => $request ['book_isbn'],
            'book_title' => $request ['book_title'],
            'book_author_id' => $request ['book_author_id'],
            'book_author_name' => $request ['book_author_name'],
            'book_colorcat' => $request ['book_colorcat'],
            'book_dis' => $request ['book_dis'],
        ]);

        $book->save();

        return redirect()->route('books.index')->with('message', 'Het boek is toegevoegd aan de catalogus');
        //het boek wordt toegevoegd in de database
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
        //de info die in de database staat wordt getoont op de edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index')->with('message', 'Boek is succesvol aangepast');
        //het boek wordt aangepast in de database
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('message', 'Boek is succesvol verwijderd');
        //het boek wordt verwijderd uit de database
    }
}
