<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Cinema\Movie;

class FrontController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', array('only' => 'admin'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function reviews()
	{
		$movies = Movie::movies();
		return view('reviews', compact('movies'));
	}

	public function admin()
	{
		return view('admin.index');
	}

}
