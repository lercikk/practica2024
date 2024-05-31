<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Image;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new News();
        $new->title = $request->title; 
        $new->description = $request->description;
        $new->user_id = auth()->id();
        $new->save();
        $id = $new->id;
        foreach ($request->images as $file){
            $extension  = $file->getClientOriginalExtension();
            $image = new Image();
            $image->news_id = $id;
            $image->name = md5(bcrypt(date('l jS \of F Y h:i:s A'))).'.'.$extension;
            $file->move(public_path(env('UPLOADS_IMAGE')), $image->name);
            $image->save();
        }
        return redirect()->route('news.index');
    }        

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $news->update($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {

        $news->delete();
        return redirect()->route('news.index');
    }
}
