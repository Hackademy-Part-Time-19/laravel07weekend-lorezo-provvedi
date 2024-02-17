<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function saveToDatabase(){
        $article = new Article;
        $article->title = 'sono il titolo';
        $article->category = 'sono la categoria';
        $article->description = 'sono la descrizione';
        $article->body='sono il body';
      
        $article->save();

    }
}
