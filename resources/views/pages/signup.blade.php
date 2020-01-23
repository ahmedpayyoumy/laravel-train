@extends('layout.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Sign Up Page</h2>
        @include('temps.errors') 
        <form action="/create_user" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" value="{{ old('username') }}">
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" autocomplete="off" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Your Password" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Sign Up Now">
            </div>
        </form>
    </div>

@endsection