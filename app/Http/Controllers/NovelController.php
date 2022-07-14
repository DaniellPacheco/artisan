<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $novels = DB::table('novels')->get();
        $novels = Novel::all();

        return view('novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formField = $request->validate([
            'titulo' => ['required', Rule::unique('novels', 'titulo')],
            'nacionalidade' => 'required',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $novel = Novel::find($id);
        return view('novels.show', [
            'novel' => $novel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
