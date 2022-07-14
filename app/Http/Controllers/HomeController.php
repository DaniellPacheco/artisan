<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Show All Novels
    public function index() {
        $novels = Novel::all();
        
        // $chapters = DB::select(DB::raw('select chapters.*, novels.titulo from chapters join novels on chapters.novel_id = novels.id'));
        $chapters = Chapter::join('novels', 'chapters.novel_id', '=', 'novels.id')
                            ->select(['chapters.*', 'novels.titulo'])
                            ->get();
                            
        return view('index', compact('novels', 'chapters'));
    }
}
