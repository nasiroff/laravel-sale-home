<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PostImages;


class PostImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 *
	 * Route::get('postimages', 'PostImagesController@index')->name('postimages.index');
	 */
	public function index()
	{
		$postimages = PostImages::all();

		return view('postimages.index', compact('postimages',$postimages));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *
	 * Route::get('postimages/create', 'PostImagesController@create')->name('postimages.create');
	 */
	public function create()
	{
		return view('postimages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 *
	 * Route::post('postimages/store', 'PostImagesController@store');
	 */
	public function store(Request $request)
	{
	     $this->validate($request, [

            'post_id' => 'required',
            'image_path' => 'required|max:150',

		 ]);
		 
		$postimages = new PostImages();

		$postimages->post_id = $request->input('post_id');
		$postimages->image_path = $request->input('image_path');

		$postimages->save();

		return redirect()->route('postimages.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('postimages/show/{id}', 'PostImagesController@show');
	 */
	public function show($id)
	{
		$postimages = PostImages::findOrFail($id);

		return view('postimages.show', compact('postimages',$postimages));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('postimages/edit/{id}', 'PostImagesController@edit');
	 */
	public function edit($id)
	{
		$postimages = PostImages::findOrFail($id);

		return view('postimages.edit', compact('postimages',$postimages));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 *
	 * Route::put('postimages/update/{id}', 'PostImagesController@update');
	 */
	public function update(Request $request, $id)
	{
		$postimages = PostImages::findOrFail($id);

		$postimages->post_id = $request->input('post_id');
		$postimages->image_path = $request->input('image_path');

		$postimages->save();

		return redirect()->route('postimages.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 *
	 * Route::get('postimages/delete/{id}', 'PostImagesController@destroy');
	 */
	public function destroy($id)
	{
		$postimages = PostImages::findOrFail($id);
		$postimages->delete();

		return redirect()->route('postimages.index')->with('message', 'Item deleted successfully.');
	}

}
