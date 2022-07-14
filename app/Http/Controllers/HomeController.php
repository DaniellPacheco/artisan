<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // Show All Novels
    public function index() {
        $novels = Novel::all();

        // $chapters = DB::table('chapters')
        //                 ->join('novels', 'novel_id', '=', 'novels.id')
        //                 ->select('created_at')
        //                 ->latest()
        //                 ->get();

        
        $chapters = DB::select(DB::raw('select chapters.*, novels.titulo from chapters join novels on chapters.novel_id = novels.id'));


        return view('index', compact('novels', 'chapters'));
    }
}
