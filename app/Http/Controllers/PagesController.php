<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!!';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'Welcome to the About page';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $title = 'Welcome to the Services page';
        $data = array(
            'title' => 'Offered Services',
            'services' => ['Web Design', 'Programming', 'Hosting']
        );
        return view('pages.services')->with($data);
    }
}
