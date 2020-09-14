

@extends('app')

@section('content')

    <p>{{$itemid->name}}</p>

    <a href="/wishlist/{{$itemid->id}}/edit">edit</a>
    <form action="/wishlist/{{$itemid->id}}" method="post">
        @csrf
        @method("DELETE")
        <button>delete</button>
    </form>
@endsection
