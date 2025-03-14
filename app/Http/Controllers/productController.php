<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all articles from the database
        $articles = Article::all();

        // Pass the articles to the view
        return view('dashboard', compact('articles'));
    }

    public function productdetails($id)
    {
        // Fetch the specific article by ID
        $article = Article::findOrFail($id);

        // Pass the article to the details view
        return view('details', compact('article'));
    }
}