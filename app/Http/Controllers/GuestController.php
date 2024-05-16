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
}
