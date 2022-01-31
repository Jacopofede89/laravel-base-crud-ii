<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomeController extends Controller
{
    public function home(){

        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function detail($id){

        $comic = Comic::findOrFail($id);

        return view('pages.detail', compact('comic'));
    }

    public function create(){
        
        return view('pages.create');
    }

    public function store(Request $request){
        
        $data = $request -> validate([

            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'relese_date' => 'required|date'
        ]);
        $data['pages'] = 100;
        $comic = Comic::create($data);
        
        return redirect() -> route('detail', $comic -> id);
    }

    public function edit($id){

        $comic = Comic::findOrFail($id);

        return view('pages.edit', compact('comic'));
    }

    public function update(Request $request, $id){

        $data = $request -> validate([

            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'relese_date' => 'required|date'
        ]);

        $comic = Comic::findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('detail', $comic -> id);

    }
    
    public function delete($id){

        $comic = Comic::findOrFail($id);

        $comic -> delete();

        return redirect() -> route('home', $comic -> id);

    }
}
