@extends('app')

@section('content')

    @forelse($wishlists as $wishlist)
        <br>
        <p class="text-center">  <img src="{{ URL::to('/') }}/images/{{ $wishlist->image }}" class="img-thumbnail" width="75" /></p>
        <p class="text-center">{{$wishlist->name}}</p>
        <p class="text-center">{{$wishlist->description}}</p>
    <p class="text-center">{{$wishlist->price}}</p>
   <a href="{{$wishlist->storeurl}}"> <p class="text-center">koop product</p> </a> <br>

    @empty
    <p class="text-center">nothing in the wishlist</p>
    @endforelse

@endsection
