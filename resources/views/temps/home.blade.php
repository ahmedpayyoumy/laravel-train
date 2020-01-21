@extends('temps.main')
@section('content')
    <div class="col-md-4 offset-md-4" style="margin:50px auto;">
        <h2>Welcome to Admin Space</h2>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-2 offset-md-1"><a href="{{ route('products.index') }}" class="btn btn-primary btn-block">Products Page</a></div>
            <div class="col-md-2 offset-md-1"><a href="{{ route('categories.index') }}" class="btn btn-success btn-block">Categories Page</a></div>
            <div class="col-md-2 offset-md-1"><a href="{{ route('users.index') }}" class="btn btn-danger btn-block">Users Page</a></div>
            <div class="col-md-2 offset-md-1"><a href="{{ route('orders.index') }}" class="btn btn-warning btn-block">Orders Page</a></div>
        </div>
    </div>
@endsection