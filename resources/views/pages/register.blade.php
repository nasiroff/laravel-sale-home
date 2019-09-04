@extends('layouts.app')


@section('title', 'Home sale. Register page')


@section('content')
    <div class="registerIntroDiv">
        <div class="container">
            <h1 class="registerIntro">Register new users</h1>
            <span class="registerAdress">
                <p>home ></p>
                <p>register</p>
            </span>
        </div>
    </div>

    <div class="container registerDiv">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group registerFormGroup">
                <label for="firstName">First Name*</label>
                <input type="text" name="first_name" value="{{ old("first_name") }}" class="form-control registerInput" id="firstName" placeholder="First name">
                {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group registerFormGroup">
                <label for="lasteName">Last name*:</label>
                <input type="text" name="last_name" value="{{ old("last_name") }}" class="form-control registerInput" id="lasteName" placeholder="Last name">
                {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group registerFormGroup">
                <label for="email">E-mail*</label>
                <input type="email" name="email" value="{{ old("email") }}" class="form-control registerInput" id="email" placeholder="E-Mail address">
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group registerFormGroup">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control registerInput" id="password" placeholder="Password">
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group registerFormGroup">
                <label for="rePass">Re-type Password*</label>
                <input type="password" name="password_confirmation"  class="form-control registerInput" id="rePass" placeholder="Re-type password">
            </div>
            <div class="form-group registerFormGroup">
                <button type="submit" class="form-control registerSubmit" id="usr">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
