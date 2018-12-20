<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->input('searchterm');

        $articles = \App\Articles::latest()
            ->search($s)
            ->paginate(10);

        return view('news.news', compact('articles', 'searchterm'));

    }

}
