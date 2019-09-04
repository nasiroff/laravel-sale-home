<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Posts;


class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('posts', 'PostsController@index')->name('posts.index');
	 */
	public function index()
	{
		$posts = Posts::all();

		return view('posts.index', compact('posts',$posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('posts/create', 'PostsController@create')->name('posts.create');
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('posts/store', 'PostsController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'user_id' => 'required',
            'city_id' => 'required',
            'address' => 'required|max:250',
            'title' => 'required|max:150',
            'desc' => 'required',
            'post_type' => 'required|max:15',
            'room_count' => 'required|numeric',
            'home_type' => 'required|max:50',
            'area' => 'required',
            'price' => 'required',
            'status' => 'required|numeric',
            'email_allowed' => 'required|numeric',

		 ]);
		 
		$posts = new Posts();

		$posts->user_id = $request->input('user_id');
		$posts->city_id = $request->input('city_id');
		$posts->address = $request->input('address');
		$posts->title = $request->input('title');
		$posts->desc = $request->input('desc');
		$posts->post_type = $request->input('post_type');
		$posts->room_count = $request->input('room_count');
		$posts->home_type = $request->input('home_type');
		$posts->area = $request->input('area');
		$posts->price = $request->input('price');
		$posts->status = $request->input('status');
		$posts->email_allowed = $request->input('email_allowed');

		$posts->save();

		return redirect()->route('posts.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('posts/show/{id}', 'PostsController@show');
	 */
	public function show()
	{

		return view('pages.search');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('posts/edit/{id}', 'PostsController@edit');
	 */
	public function edit($id)
	{
		$posts = Posts::findOrFail($id);

		return view('posts.edit', compact('posts',$posts));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('posts/update/{id}', 'PostsController@update');
	 */
	public function update(Request $request, $id)
	{
		$posts = Posts::findOrFail($id);

		$posts->user_id = $request->input('user_id');
		$posts->city_id = $request->input('city_id');
		$posts->address = $request->input('address');
		$posts->title = $request->input('title');
		$posts->desc = $request->input('desc');
		$posts->post_type = $request->input('post_type');
		$posts->room_count = $request->input('room_count');
		$posts->home_type = $request->input('home_type');
		$posts->area = $request->input('area');
		$posts->price = $request->input('price');
		$posts->status = $request->input('status');
		$posts->email_allowed = $request->input('email_allowed');

		$posts->save();

		return redirect()->route('posts.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('posts/delete/{id}', 'PostsController@destroy');
	 */
	public function destroy($id)
	{
		$posts = Posts::findOrFail($id);
		$posts->delete();

		return redirect()->route('posts.index')->with('message', 'Item deleted successfully.');
	}

}
