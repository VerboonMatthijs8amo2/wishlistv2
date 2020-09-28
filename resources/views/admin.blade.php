@extends('app')

@section('content')

    @if(isset(Auth::user()->email))
    @if(Auth::user()->user_role == 1)
            <a href="{{ url('/login/logout')}}"><button type="button" class="btn btn-primary">log out</button></a>
            <a href="{{'/wishlist/create'}}" ><button type="button" class="btn btn-primary">add new item</button></a>
            <a href="{{'/admin/register'}}" ><button type="button" class="btn btn-primary">add new admin</button></a>
            @forelse($wishlists as $wishlist)
                <p class="text-center">  <img src="{{ URL::to('/') }}/images/{{ $wishlist->image }}" class="img-thumbnail" width="75" /></p>
                <a href="/wishlist/{{$wishlist->id}}" ><p class="text-center">{{$wishlist->name}}</p></a>




            @empty
                <p class="text-center">nothing in the wishlist</p>
            @endforelse
        @elseif (Auth::user()->user_role == 2)
            <a href="{{ url('/login/logout')}}"><button type="button" class="btn btn-primary">log out</button></a>
            <a href="{{'/wishlist/create'}}" ><button type="button" class="btn btn-primary">add new item</button></a>
            @forelse($wishlists as $wishlist)
                @if (auth()->user()->id  == $wishlist->user_id)
                    <p class="text-center">  <img src="{{ URL::to('/') }}/images/{{ $wishlist->image }}" class="img-thumbnail" width="75" /></p>
               <a href="/wishlist/{{$wishlist->id}}" ><p class="text-center">{{$wishlist->name}}</p></a>
                <br>
               @endif
            @empty
                <p class="text-center">nothing in the wishlist</p>
            @endforelse
    @endif
        @else
        <script>window.location="/login"</script>
    @endif

@endsection
