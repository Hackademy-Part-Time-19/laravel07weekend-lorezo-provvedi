<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreArticleQuest;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function saveToDatabase(StoreArticleQuest $request)

    {
        $validated = $request->validated();
        $article = Article::create($validated);
        $image = "";
        if ($request->hasFile('image')) {

            $path = 'public/images';
            $name = $article['id'] . 'copertina' . '.' . $request->file('image')->extension();
            $file = $request->file('image')->storeAs($path, $name);
            $image = $path . '/' . $name;
            $article->image = $image;
            $article->save();
        };
        /*$article = new Article;
        $article->title = 'sono il titolo';
        $article->category = 'sono la categoria';
        $article->description = 'sono la descrizione';
        $article->body='sono il body';
      
        $article->save();*/

        //Article::create(['title'=>'sono il titolo creato','category'=>'sono la category creata','description'=>'sono la descrizione creata','body'=>'sono il body creato',]);



        /*$request->validate([

        'title'=>'required|max:50',
        'category'=>'required|max:20',
        'description'=>'required|max:150',
        'body'=>'required|max:5000',
       ]);*/


        $validator = Validator::make($request->all(), [
            /*'title' => 'required|max:50',
            'category' => 'required|max:20',
            'description' => 'required|max:150',
            'body' => 'required|max:5000',
            'image' => 'nullable',*/]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Article::create($request->all());
            return redirect()->back()->with('success', 'messaggio inserito');
        }
    }

    public function create()
    {
        return view('form');
    }
}
