<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        $breakingNews = News::where([            
            'is_breaking_news' => 1,         
        ])->activeEntries()->withLocalize()->orderBy('id', 'DESC')->take(10)->get();
        return view('frontend.home',compact('breakingNews'));
    }
}
