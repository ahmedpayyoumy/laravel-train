@extends('temps.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Add New Product Page</h2>
        @include('temps.errors') 
        <form action="{{ route('products.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="product_name" placeholder="Product Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select data-style="btn-primary" name="category" class="selectpicker form-control" data-live-search="true">
                    <option value="0">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add New Product">
            </div>
        </form>
    </div>

@endsection