<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Cinema\Movie;
use Cinema\Genre;

use Illuminate\Routing\Route;

class MovieController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
		$this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
	}

	public function find(Route $route)
	{
		$this->movie = Movie::find($route->getParameter("pelicula"));

		$this->notFound($this->movie);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::movies();
		return view('pelicula.index', compact('movies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$genres = Genre::lists('genre', 'id');
		return view('pelicula.create', compact('genres'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Movie::create($request->all());
		return redirect('/pelicula')->with('message', 'Pelicula creada correctamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$genres = Genre::lists('genre', 'id');
		$movie = Movie::find($id);

		return view('pelicula.edit', ['movie' => $movie, 'genres' => $genres]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$movie = Movie::find($id);
		$movie->fill($request->all());
		$movie->save();
		return redirect('/pelicula')->with('message', 'Pelicula editada correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$movie = Movie::find($id);
		\Storage::delete($movie->path);
		$movie->delete();
		return redirect('/pelicula')->with('message', 'Pelicula eliminada correctamente');
	}

}
