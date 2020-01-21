@extends('temps.main')
@section('content')

    <div class="col-md-8 offset-md-2">
        <h2>Edit Product Page</h2>
        @include('temps.errors') 
        <form action="{{ route('products.update',$data['product']->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <input type="text" name="product_name" value="{{ $data['product']->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select data-style="btn-primary" name="category" class="selectpicker form-control" data-live-search="true">
                    <option value="0">Select Category</option>
                    @foreach($data['categories'] as $category)
                        <option @if($category->id == $data['product']->category_id)
                            {{'selected'}}
                        @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Update Product">
            </div>
        </form>
    </div>

@endsection