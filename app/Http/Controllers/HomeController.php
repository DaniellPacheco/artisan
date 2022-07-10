<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novel;

class HomeController extends Controller
{
    // Show All Novels
    public function index() {
        $novels = Novel::all();

        return view('index', [
            'novels' => $novels
        ]);
    }
}
