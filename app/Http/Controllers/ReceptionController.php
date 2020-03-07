<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['lists_1'] = ['lists1', 'lists', 'lists'];
        $data['lists_2'] = ['lists2', 'lists', 'lists'];
        return view('receptions.index', $data);
    }

    public function lists(Request $request)
    {
        $data['articles'] = ['articles', 'articles', 'articles'];
        return view('receptions.lists', $data);
    }

    public function article(Request $request)
    {
        $data['article'] = 'abc';
        return view('receptions.article', $data);
    }
}
