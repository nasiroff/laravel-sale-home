<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Requests\RegisterRequest;
use App\Models\Posts;
use App\Models\Users;
use App\Notifications\CustomVerifyEmail;
use App\Services\CitiesService;
use App\Services\PostService;
use http\Client\Curl\User;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {
        $postService = new PostService();
        $posts = $postService->getPosts();
        $saleAndRentPosts = $postService->getLastLimitedSaleAndRentPosts();
        $saleCollection = new Collection();
        $rentCollection = new Collection();
        $saleAndRentPosts->each(function ($item) use ($saleCollection, $rentCollection) {
            if ($item['post_type'] == 'Sale') {
                $saleCollection->add($item);
            } elseif ($item['post_type'] == 'Rent') {
                $rentCollection->add($item);
            }
        });
        $shuffledSale = $saleCollection->shuffle();
        $shuffledRent = $rentCollection->shuffle();
        $cities = CitiesService::getAllCities();
        return view('pages.home')->with("posts", $posts)->with('cities', $cities)->with('randomSale', $shuffledSale)->with('randomRent', $shuffledRent);
    }

    public function showLoginPage()
    {
        return view("pages.login");
    }

    public function showRegisterPage()
    {
        return view('pages.register');
    }

    public function doRegister(RegisterRequest $request)
    {
        $users = Users::create($request->except(["_token", "password_confirmation"]) + ["role_id" => 3]);

        $users->notify(new CustomVerifyEmail());
//            return redirect("/")->with("message", "User successfully created");
//
//        return back()->withInput()->withErrors();
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->only("email", "password");
        if (Auth::attempt($credentials)) {
            return redirect()->intended("/");
        }
        return redirect()->back()->withErrors();

    }
}
