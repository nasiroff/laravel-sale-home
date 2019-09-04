<?php

use App\Models\Posts;

Route::get('/test', function () {

    $raw = DB::select("(select * from posts where post_type = 'sale' order by created_at desc limit 15) union (select * from posts where post_type = 'rent'  order by created_at desc limit 15)");
    $sale = [];
    $rent = [];
    foreach ($raw as $item) {
        if ($item->post_type === 'Sale') {
            $sale[] = $item;
        } elseif ($item->post_type == 'Rent') {
            $rent[] = $item;
        }
    }
    dump($sale, $rent);
});


Route::get("/", "homeController@index");


Route::auth(['verify' => true]);
Route::get("/login", "homeController@showLoginPage");
Route::post("/login", "homeController@doLogin")->name('login');
Route::get("/register", "homeController@showRegisterPage");
Route::post("/register", "homeController@doRegister")->name('register');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(["prefix" => "user"], function () {
        Route::get("posts", "postsController@show");
    });
});
