@extends('layout.main')
@section('content')
@if(isset($error))
<p>{{$error}}</p>
@endif
    <form method="POST" action="">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    </form>
@stop
