<?php namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ArticleController extends Controller {

	public function index()
	{
		$articles = Articles::orderBy('created_at', 'desc')->get();
		return view('articles.articles', compact('articles'));
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

	public function store()
	{
		$inputs = Request::all();

		Articles::create( $inputs );

		return redirect('articles');
	}

}
