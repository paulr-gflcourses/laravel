@extends('layout.main')
@section('content')
@if(isset($error))
<p class="error">{{$error}}</p>
@endif
<div class="row">
    <div class="col-lg-3">
        <form method="POST" action="{{ action('RemindersController@postReset')  }}">
            <input type="hidden" name="token" value="{{ $token  }}">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email">
                <div class="error form-text text-muted">
                    {{$errors->first('email') }}
                </div>
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <div class="error form-text text-muted">
                    {{$errors->first('password') }}
                </div>
                <input type="password" class="form-control" name="password_confirmation">

            </div>
            <button type="submit" class="btn btn-primary">Reset password</button>
        </form>
    </div>
</div>
@stop
