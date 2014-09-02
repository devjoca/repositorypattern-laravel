<?php

use Coka\Repo\Location\ILocationRepository;

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

	public function __construct(ILocationRepository $location){
		$this->location = $location;
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index(){
			$locations = $this->location->all();
			return Response::json($locations, 200);
	}
}
