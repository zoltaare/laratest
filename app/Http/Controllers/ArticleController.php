<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Articles;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticleController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']); //['except' => 'index']
	}

	public function index()
	{
		$articles = Articles::latest('published_at')->published()->get();
		return view('articles.articles', compact('articles'));
		// return \Auth::user()->article;
	}

	public function show($id)
	{
		$article = Articles::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(ArticleRequest $request)
	{
		$article = new Articles( $request->all() );
		$article->author = \Auth::user()->name;
		\Auth::user()->article()->save( $article );
		return redirect('articles');
	}

	public function edit( $id )
	{
		$article = Articles::findOrFail( $id );
		return view( 'articles.edit', compact( 'article' ) );
	}

	public function update($id , ArticleRequest $request)
	{
		$article = Articles::findOrFail( $id );
		$article->update( $request->all() );
		return redirect('articles');
	}

}
