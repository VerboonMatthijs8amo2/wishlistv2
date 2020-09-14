@extends('app')

@section('content')

    @forelse($wishlists as $wishlist)
        <p class="text-center">{{$wishlist->name}}</p>
        <p class="text-center">{{$wishlist->description}}</p>
    <p class="text-center">{{$wishlist->price}}</p>
   <a href="{{$wishlist->storeurl}}"> <p class="text-center">koop product</p> </a> <br>

    @empty
    <p class="text-center">nothing in the wishlist</p>
    @endforelse

@endsection
