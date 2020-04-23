@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <form action= "{{Route('product.store')}}" method="POST">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label><h5>New List</h5></label>
                    <input type="text" name="name" class="form-control"/>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Create" class="btn btn-outline-primary btn-sm">
                </input>
            </div>
        </form>
    </div>
</div>
@endsection