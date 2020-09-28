@extends('app')

@section('content')
    <p>add new item</p>

    <form action="/wishlist" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" class="form-control">
            @error('description') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control">
            @error('price') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="storeurl">url of product</label>
            <input type="text" name="storeurl" class="form-control">
            @error('storeurl') <p>{{ $message }}</p> @enderror

        </div>
        <div class="form-group">
            <label for="image">image of product</label>
            <input type="file" name="image" />
            @error('image') <p>{{ $message }}</p> @enderror

        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
