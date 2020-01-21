@extends('temps.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Add New Category Page</h2>
        @include('temps.errors') 
        <form action="{{ route('categories.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="cat_name" placeholder="Category Name" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add New Category">
            </div>
        </form>
    </div>

@endsection