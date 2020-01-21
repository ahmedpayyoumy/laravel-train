@extends('temps.main')
@section('content')
    
<div class="col-md-8 offset-md-2" id="add_buyer">    
    <h2>Categories Page</h2>
    @if (session('msg'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ session('msg') }}</strong>
        </div>
    @endif
    <a href="{{ route('categories.create')}}" style="margin:20px auto;" class="btn btn-primary">Add New Category</a>
    {{ $categories->links() }}
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Control Buttons</th>
            </tr>
        </thead>
        <tbody>
            @if (count($categories) > 0)
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit',['category' => $category->id ]) }}" style="float:left;margin-right:10px;" class="btn btn-primary">Edit</a> 
                            <form action="{{ route('categories.destroy',['category' => $category->id ]) }}" method="POST">
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