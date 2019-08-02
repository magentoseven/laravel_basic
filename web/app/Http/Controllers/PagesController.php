<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = 'Welcome To Laravel!';
        return view('pages.index', compact('title'));
    }

    public function about () {
        $data = [
            'title' => 'About',
            'comment' => 'This is the about page.'
        ];
        return view('pages.about')->with($data);
    }

    public function users () {
        $data = [
            'title' => 'Users',
            'comment' => 'This is the users page.',
            'users' => [
                [ 'id' => 1, 'name' => 'Mageas' ],
                [ 'id' => 2, 'name' => 'Magenta' ]
            ]
        ];
        return view('pages.users')->with($data);
    }
}
