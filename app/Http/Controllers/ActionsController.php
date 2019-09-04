<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Actions;


class ActionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('actions', 'ActionsController@index')->name('actions.index');
	 */
	public function index()
	{
		$actions = Actions::all();

		return view('actions.index', compact('actions',$actions));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('actions/create', 'ActionsController@create')->name('actions.create');
	 */
	public function create()
	{
		return view('actions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('actions/store', 'ActionsController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'controller' => 'required|max:191',
            'method' => 'required|max:191',

		 ]);
		 
		$actions = new Actions();

		$actions->controller = $request->input('controller');
		$actions->method = $request->input('method');

		$actions->save();

		return redirect()->route('actions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('actions/show/{id}', 'ActionsController@show');
	 */
	public function show($id)
	{
		$actions = Actions::findOrFail($id);

		return view('actions.show', compact('actions',$actions));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('actions/edit/{id}', 'ActionsController@edit');
	 */
	public function edit($id)
	{
		$actions = Actions::findOrFail($id);

		return view('actions.edit', compact('actions',$actions));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('actions/update/{id}', 'ActionsController@update');
	 */
	public function update(Request $request, $id)
	{
		$actions = Actions::findOrFail($id);

		$actions->controller = $request->input('controller');
		$actions->method = $request->input('method');

		$actions->save();

		return redirect()->route('actions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('actions/delete/{id}', 'ActionsController@destroy');
	 */
	public function destroy($id)
	{
		$actions = Actions::findOrFail($id);
		$actions->delete();

		return redirect()->route('actions.index')->with('message', 'Item deleted successfully.');
	}

}
