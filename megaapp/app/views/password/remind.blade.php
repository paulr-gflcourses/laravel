@extends('layout.main')
@section('content')
@if(isset($error))
<p class="error">{{$error}}</p>
@endif
<div class="row">
    <div class="col-lg-3">
        <h2>Send password to email</h2>
        <form method="POST" action="{{ action('RemindersController@postRemind')  }}">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email">
                <div class="error form-text text-muted">
                    {{$errors->first('email') }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send password</button>
    </div>
        </form>
</div>
</div>
@stop
