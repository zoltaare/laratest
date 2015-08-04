<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		return view('home');
	}

	public function about()
	{
		$members = [
			'Dev1',
			'Dev2',
			'Dev3'
		];
		return view('pages.about' , compact('members'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
