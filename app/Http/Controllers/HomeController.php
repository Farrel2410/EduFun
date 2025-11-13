<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $articles = Article::latest()->take(6)->get();
        return view('home', compact('articles'));
    }

    public function category()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function categoryDetail($id)
    {
        $category = Category::findOrFail($id);
        $articles = Article::where('category_id', $id)->latest()->get();
        return view('category_detail', compact('category', 'articles'));
    }

    public function writers()   
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    public function writerDetail($id)
    {
        $writer = Writer::findOrFail($id);
        $articles = Article::where('writer_id', $id)->latest()->get();
        return view('writer_detail', compact('writer', 'articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function popular()
    {
        $articles = Article::orderBy('views', 'desc')->take(6)->get();
        return view('popular', compact('articles'));
    }
}
