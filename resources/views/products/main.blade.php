@extends('temps.main')
@section('content')
    
<div class="col-md-8 offset-md-2" id="add_buyer">    
    <h2>Products Page</h2>
    @if (session('msg'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ session('msg') }}</strong>
        </div>
    @endif
    <a href="{{ route('products.create')}}" style="margin:20px auto;" class="btn btn-primary">Add New Product</a>
    {{ $products->links() }}
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Category</th>
            <th scope="col">Control Buttons</th>
            </tr>
        </thead>
        <tbody>
            @if (count($products) > 0)
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cat_name }}</td>
                        <td>
                            <a href="{{ route('products.edit',['category' => $product->id ]) }}" style="float:left;margin-right:10px;" class="btn btn-primary">Edit</a> 
                            <form action="{{ route('products.destroy',['category' => $product->id ]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input name="submit" class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>


@endsection