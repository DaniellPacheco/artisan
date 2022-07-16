<?php

namespace App\Http\Controllers;

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
}
