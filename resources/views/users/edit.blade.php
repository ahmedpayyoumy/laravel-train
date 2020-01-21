@extends('temps.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Edit Category Page</h2>
        @include('temps.errors') 
        <form action="{{ route('categories.update',$category->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <input type="text" name="cat_name" value="{{ $category->name }}" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Update Category">
            </div>
        </form>
    </div>

@endsection