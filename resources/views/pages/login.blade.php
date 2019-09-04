@extends('layouts.app')


@section('title', 'Sale home. Login page')


@section('content')
    <div class="registerIntroDiv">
        <div class="container">
            <h1 class="registerIntro">Log in</h1>
            <span class="registerAdress">
                <p>home ></p>
                <p>login</p>
            </span>
        </div>
    </div>
    <div class="container registerDiv">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group modalFormGroup">
                <label for="email">E-mail:</label>
                <input type="text" name="email" class="form-control modalInput" id="email" placeholder="E-Mail">
            </div>
            <div class="form-group modalFormGroup">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control modalInput" id="password" placeholder="Password">
            </div>
            <div class="form-group modalFormGroup">
                <input type="submit" class="form-control modalSubmit" value="Log in">
            </div>
        </form>
        <p class="modalA">or</p>
        <a class="modalA" href="{{ url('register')  }}">Register new user</a>
    </div>
@endsection
