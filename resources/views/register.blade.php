@extends('app')

@section('content')
    <div class="columns box is-centered is-fullwidth">
        <div class="column is-half">
            <form class="form" action="{{ url('/register/store')}}" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">gebruikersnaam</label>
                    <div class="control">
                        <input type="text" name="username"></br>
                    </div>


                    <div class="field">
                        <label class="label">wachtwoord</label>
                        <div class="control">
                            <input type="password" name="password"></br>
                        </div>

                                <div class="field">
                                    <label class="label">email</label>
                                    <div class="control">
                                        <input type = "email" name="email"></br>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="register" value="register">
            </form>
        </div>
    </div>
@endsection
