@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <form action= "{{Route('product.update',$product->id)}}" method="POST">
        @csrf
        @method('put')
            <div class="card-header">
                <h5>Shopping List</h5> <a href="{{Route('product.create')}}"></a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Update" class="btn btn-outline-primary btn-sm">
                </input>
            </div>
        </form>
    </div>
</div>
@endsection