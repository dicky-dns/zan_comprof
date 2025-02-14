<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::where('published', 1)
            ->orderBy('post_date')
            ->paginate(12);

        return view('article.article', [
            'articles' => $articles,
        ]);
    }

    public function detail($slug)
    {
        $article = Article::where('slug', $slug)
            ->first();
        if (! $article) {
            abort(404);
        }
        $article->viewer = $article->viewer + 1;
        $article->save();
        $populararticle = Article::orderBy('viewer', 'desc')
            ->take(5)
            ->get();

        return view('article.detail', [
            'article' => $article,
            'populararticle' => $populararticle,
        ]);
    }
}
