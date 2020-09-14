@extends('app')

@section('content')
    @if(isset(Auth::user()->email))
    <a href="{{ url('/login/logout')}}"><button type="button" class="btn btn-primary">log out</button></a>
    <a href="{{'/wishlist/create'}}" ><button type="button" class="btn btn-primary">add new item</button></a>
    @forelse($wishlists as $wishlist)
        <a href="/wishlist/{{$wishlist->id}}" ><p class="text-center">{{$wishlist->name}}</p></a>




    @empty
        <p class="text-center">nothing in the wishlist</p>
    @endforelse
    @else
        <script>window.location="/login"</script>
    @endif

@endsection
