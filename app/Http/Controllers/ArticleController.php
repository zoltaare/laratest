<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Articles;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;

class ArticleController extends Controller {

	public function index()
	{
		$articles = Articles::latest('published_at')->published()->get();
		return view('articles.articles', compact('articles'));
	}

	public function show($id)
	{
		$article = Articles::findOrFail($id);

		dd( $article->published_at ); 
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(CreateArticleRequest $request)
	{
		Articles::create( $request->all() );

		return redirect('articles');
	}

}
