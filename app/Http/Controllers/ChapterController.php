<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chapter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $novels = DB::table('novels')->get();
        $novels = Novel::findAll();

        return view('chapter.create', compact('novels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'novel_id' => 'required',
            'titulo_capitulo' => 'required',
            'capitulo' => ['required', Rule::unique('chapters', 'capitulo')],
            'conteudo' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Chapter::create($formFields);

        return redirect('/novels/'.$formFields['novel_id'])->with('message', 'Capítulo criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idNovel, $idChapter)
    {
        $chapter = Chapter::where('novel_id', $idNovel)->where('capitulo', $idChapter)->get();

        return view('chapter.show', compact('chapter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idNovel, $idChapter)
    {

        $chapter = Chapter::where('novel_id', $idNovel)->where('capitulo', $idChapter)->get();

        return view('chapter.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        $formFields = $request->validate([
            'novel_id' => 'required',
            'titulo_capitulo' => 'required',
            'capitulo' => ['required', Rule::unique('chapters', 'capitulo')],
            'conteudo' => 'required'
        ]);

        $chapter->update($formFields);

        return redirect('/novels/'.$formFields['novel_id'].'/chapter/'.$formFields['capitulo'])->with('message', 'Capítulo atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return redirect('/')->with('message', 'Capítulo excluido com sucesso');
    }
}
