<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){

		return View::make('index');
	}

	public function doCreate(){

		$article = new Article();

		$article->name = Input::get('name');
		$article->author = Input::get('author');
		$article->url = Input::get('url');
		$article->difficulty = Input::get('difficulty');
		$article->email = Input::get('email');
		$article->category = 'category';
		$article->type = '';
		
		$article->save();
	}

}
