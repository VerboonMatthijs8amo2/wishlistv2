@extends('app')

@section('content')
    <div class="columns box is-centered is-fullwidth ">
        <div class="column is-half">
            @if(isset(Auth::user()->email))
                <script>window.location = "/admin" </script>
            @endif
            @if ($message = Session::get('error'))
                <strong>{{ $message }}</strong>
            @endif
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            @endif
            <form class="form" method = "post" action="{{ url('/login/checklogin')}}">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">email</label>
                    <div class="control">
                        <input type = "email" name="email"></br>
                    </div>
                </div>
                <div class="field">
                    <label class="label">wachtwoord</label>
                    <div class="field">
                        <input type="password" name="password"></br>
                    </div>
                </div>
                <input type="submit" name="login" value="login">
            </form>

        </div>
    </div>
@endsection
