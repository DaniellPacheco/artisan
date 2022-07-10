<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NovelController extends Controller
{
    // Show All Novels
    public function index() {
        // $novels = [];
        // dd(Novel::all());
        // // dd($novels);

        // return view('novels.index', [
        //     // erro
        //     'novels' => $novels
        // ]);
    }

    // Show Single Novel
    public function show($id) {
        $novel = Novel::find($id);
        return view('novels.show', [
            'novel' => $novel
        ]);
    }

    // Show Create Form
    public function create() {
        return view('novels.create');
    }

    // Store New Novel
    public function store(Request $request) {
        $formField = $request->validate([
            'titulo' => ['required', Rule::unique('novels', 'titulo')],
            'autor' => ['required', Rule::unique('novels', 'autor')],
            'tags' => 'required',
            'sinopse' => 'required',
            'imagem' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if($request->hasFile('imagem')) {
            $formField['imagem'] = $request->file('imagem')->store('novels', 'public');
        }

        $formField['user_id'] = auth()->id();

        Novel::create($formField);

        return redirect('/')->with('message', 'Novel criada com sucesso!');
    }


}
