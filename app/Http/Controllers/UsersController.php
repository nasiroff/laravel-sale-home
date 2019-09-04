<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Users;


class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('users', 'UsersController@index')->name('users.index');
	 */
	public function index()
	{
		$users = Users::all();

		return view('users.index', compact('users',$users));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('users/create', 'UsersController@create')->name('users.create');
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('users/store', 'UsersController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
            'email' => 'required|email|max:150',
            'email_verified_at' => 'date',
            'password' => 'required|max:191',
            'role_id' => 'required',
            'remember_token' => 'max:100',

		 ]);
		 
		$users = new Users();

		$users->first_name = $request->input('first_name');
		$users->last_name = $request->input('last_name');
		$users->email = $request->input('email');
		$users->email_verified_at = $request->input('email_verified_at');
		$users->password = $request->input('password');
		$users->role_id = $request->input('role_id');
		$users->remember_token = $request->input('remember_token');

		$users->save();

		return redirect()->route('users.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('users/show/{id}', 'UsersController@show');
	 */
	public function show($id)
	{
		$users = Users::findOrFail($id);

		return view('users.show', compact('users',$users));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('users/edit/{id}', 'UsersController@edit');
	 */
	public function edit($id)
	{
		$users = Users::findOrFail($id);

		return view('users.edit', compact('users',$users));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('users/update/{id}', 'UsersController@update');
	 */
	public function update(Request $request, $id)
	{
		$users = Users::findOrFail($id);

		$users->first_name = $request->input('first_name');
		$users->last_name = $request->input('last_name');
		$users->email = $request->input('email');
		$users->email_verified_at = $request->input('email_verified_at');
		$users->password = $request->input('password');
		$users->role_id = $request->input('role_id');
		$users->remember_token = $request->input('remember_token');

		$users->save();

		return redirect()->route('users.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('users/delete/{id}', 'UsersController@destroy');
	 */
	public function destroy($id)
	{
		$users = Users::findOrFail($id);
		$users->delete();

		return redirect()->route('users.index')->with('message', 'Item deleted successfully.');
	}

}
