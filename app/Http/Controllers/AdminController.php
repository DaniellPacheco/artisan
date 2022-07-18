<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Novel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }


    public function novelList() {

        $novels = Novel::all();

        return view('admin.novel-list', compact('novels'));
    }

    public function chapterList() {
        $chapters = Chapter::join('novels', 'chapters.novel_id', '=', 'novels.id')
                            ->select(['chapters.*', 'novels.titulo'])
                            ->latest()
                            ->get();

        return view('admin.chapter-list', compact('chapters'));
    }
}
