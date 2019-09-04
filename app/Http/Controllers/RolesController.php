<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Roles;


class RolesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('roles', 'RolesController@index')->name('roles.index');
	 */
	public function index()
	{
		$roles = Roles::all();

		return view('roles.index', compact('roles',$roles));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('roles/create', 'RolesController@create')->name('roles.create');
	 */
	public function create()
	{
		return view('roles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('roles/store', 'RolesController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'type' => 'required|max:191',

		 ]);
		 
		$roles = new Roles();

		$roles->type = $request->input('type');

		$roles->save();

		return redirect()->route('roles.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('roles/show/{id}', 'RolesController@show');
	 */
	public function show($id)
	{
		$roles = Roles::findOrFail($id);

		return view('roles.show', compact('roles',$roles));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('roles/edit/{id}', 'RolesController@edit');
	 */
	public function edit($id)
	{
		$roles = Roles::findOrFail($id);

		return view('roles.edit', compact('roles',$roles));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('roles/update/{id}', 'RolesController@update');
	 */
	public function update(Request $request, $id)
	{
		$roles = Roles::findOrFail($id);

		$roles->type = $request->input('type');

		$roles->save();

		return redirect()->route('roles.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('roles/delete/{id}', 'RolesController@destroy');
	 */
	public function destroy($id)
	{
		$roles = Roles::findOrFail($id);
		$roles->delete();

		return redirect()->route('roles.index')->with('message', 'Item deleted successfully.');
	}

}
