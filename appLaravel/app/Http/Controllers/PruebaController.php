<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "<h1>Hola soy un controlador</h1>";
	}

	public function nombre($nombre)
	{
		return "<h1>Hola mi nombre es: " . $nombre . "</h1>";
	}

}
