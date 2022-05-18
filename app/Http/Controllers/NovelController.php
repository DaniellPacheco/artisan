<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelController extends Controller
{
    // Show All Novels
    public function index(Request $request) {
        return view('novels.index');
    }

    // Show Create Form
    public function create() {
        return view('novels.create');
    }

    // Store New Novel
    public function store() {
        
    }
}
