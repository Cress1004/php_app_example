<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to My Page!";
        // return view('page.index', compact('title'));
        return view('page.index')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'SEO'],
        );
        return view('page.services')->with($data);
    }
}
