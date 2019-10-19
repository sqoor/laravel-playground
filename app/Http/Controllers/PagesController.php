<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About Page';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development', 'Web design', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}
