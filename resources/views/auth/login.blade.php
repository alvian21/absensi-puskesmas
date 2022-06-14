@extends('layouts.begin_auth')

@section('title', 'Login')

@section('content')

@include('backend.include.alert')
<div class="card card-primary">
    <div class="card-header">
        <h4>Hello, silahkan masuk dengan akun Anda!</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" value="{{ old('username') }}" required class="form-control" name="username" tabindex="1" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input id="password" type="password" class="form-control" required name="password" tabindex="2">
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
