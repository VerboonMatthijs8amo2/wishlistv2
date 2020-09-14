@extends('app')

@section('content')
    <p>update item</p>
    <form action="/wishlist/{{$itemid->id}}" method="post">

        @method('PATCH')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="{{$itemid->name}}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" class="form-control" value="{{$itemid->description}}">
            @error('description') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control" value="{{$itemid->price}}">
            @error('price') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="storeurl">url of product</label>
            <input type="text" name="storeurl" class="form-control" value="{{$itemid->storeurl}}">
            @error('storeurl') <p>{{ $message }}</p> @enderror

        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
