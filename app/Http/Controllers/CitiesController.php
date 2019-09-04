<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Cities;


class CitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('cities', 'CitiesController@index')->name('cities.index');
	 */
	public function index()
	{
		$cities = Cities::all();

		return view('cities.index', compact('cities',$cities));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('cities/create', 'CitiesController@create')->name('cities.create');
	 */
	public function create()
	{
		return view('cities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('cities/store', 'CitiesController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'name' => 'required|max:191',

		 ]);
		 
		$cities = new Cities();

		$cities->name = $request->input('name');

		$cities->save();

		return redirect()->route('cities.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('cities/show/{id}', 'CitiesController@show');
	 */
	public function show($id)
	{
		$cities = Cities::findOrFail($id);

		return view('cities.show', compact('cities',$cities));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('cities/edit/{id}', 'CitiesController@edit');
	 */
	public function edit($id)
	{
		$cities = Cities::findOrFail($id);

		return view('cities.edit', compact('cities',$cities));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('cities/update/{id}', 'CitiesController@update');
	 */
	public function update(Request $request, $id)
	{
		$cities = Cities::findOrFail($id);

		$cities->name = $request->input('name');

		$cities->save();

		return redirect()->route('cities.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('cities/delete/{id}', 'CitiesController@destroy');
	 */
	public function destroy($id)
	{
		$cities = Cities::findOrFail($id);
		$cities->delete();

		return redirect()->route('cities.index')->with('message', 'Item deleted successfully.');
	}

}
