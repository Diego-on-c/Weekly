@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Product <a href="{{Route('product.create')}}" class="btn btn-secondary btn-sm">New</a></h5>
        </div>
        <div >
            <ul>
                @foreach($products as $product)
                        <h5>{{$product->name}}</h5>
                        <a class="btn btn-outline-secondary btn-sm" href="{{Route('product.edit', $product->id)}}" role="button">Edit</a>
                            <form action="{{Route('product.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('delete')
                            <input type="submit" value="Delete" class="btn btn-xs btn-outline-danger btn-sm">
                        </form>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection