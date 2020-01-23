@extends('layout.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Sign In Page</h2>
        @include('temps.errors') 
        <form action="/dashboard" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" name="username" placeholder="Email" class="form-control" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="password" class="form-control" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add New Product">
            </div>
        </form>
    </div>

@endsection