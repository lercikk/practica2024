<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\News;


class GuestController extends Controller
{
    public function index():View
    {
        $news = News::limit(6)->get();
        return view('guest.index', ['news' => $news]);
    }
  
    
    public function about() {
        return view('guest.about');
    }
    
    public function services() {
        return view('guest.services');
    }
    
    public function responsibilities() {
        return view('guest.responsibilities');
    }
    
    public function country() {
        return view('guest.country');
    }
    
    public function apply() {
        return view('guest.apply');
    }
    public function show(News $news)
    {
        return view('guest.news', ['news'=>$news]);
    }
}
