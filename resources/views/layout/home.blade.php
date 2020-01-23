@extends('layout.main')
@section('content')
    @if (session('msg'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('msg') }}</strong>
    </div>
    @endif
@endsection