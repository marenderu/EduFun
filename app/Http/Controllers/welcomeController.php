<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Writer;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){

        // $articles = Article::take(2)->get();
        $category = ['Data-Science', 'Network-Security'];
        $articles = Article::with('writer')->take(2)->get();
        return view('welcome', ['articles'=> $articles,'category'=> $category]);
    }

    public function post($id){

        $category = ['Data-Science', 'Network-Security'];
        $article = Article::with('writer')->find($id);
        return view('article', ['article'=> $article, 'category'=> $category]);
    }

    public function postPerCategory($category){

        $categories = ['Data-Science', 'Network-Security'];
        $article = Article::with('writer')->where('category', $category)->get();
        return view('PostsPerCategory', ['articles'=> $article, 'category'=> $categories,'PostCategory'=> $category]);
    }

    public function AboutUs(){
        $category = ['Data-Science', 'Network-Security'];
        return view('AboutUs', ['category'=> $category]);
    }

    public function Writers(){
        
        $category = ['Data-Science', 'Network-Security'];
        $writers = Writer::all();
        return view('Writers', ['category'=> $category,'writers'=> $writers]);
    }

    public function WritersPost($name)
    {
    $category = ['Data-Science', 'Network-Security'];
    $writer = Writer::with('articles')->where('writer_name', $name)->first();
    $articles = $writer ? $writer->articles : [];

    return view('WritersPost', ['category' => $category, 'writer' => $writer, 'articles' => $articles]);
    }

}
