@extends('layout.main')
@section('content')

<div class="row">
<div class="col-sm-4">

<form method="POST" action="">


<div class="form-group">
    <label for="nickname">Nickname</label>
    <input type="text" class="form-control" id="nickname" name="nickname">
    <div class="form-text text-muted">
        {{$errors->first('nickname') }}
    </div>
</div>

<div class="form-group">
    <label for="email" >E-mail</label>
    <input type="text" class="form-control" id="email" name="email">
    <div class="form-text text-muted">
        {{$errors->first('email') }}
    </div>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <div class="form-text text-muted">
        {{$errors->first('password') }}
    </div>
</div>

<button type="submit" class="btn btn-primary">Register Me</button>
</form>

</div>
</div>
@stop
