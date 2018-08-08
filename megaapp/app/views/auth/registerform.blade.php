@extends('layout.main')
@section('content')

<form action="" method="post">
<input type="text" name="nickname" id="" value="" />
{{ $errors->first('nickname') }}
<input type="text" name="email" id="email" value="" />
{{ $errors->first('email') }}
<input type="password" name="password" id="password" value="" />
{{ $errors->first('password') }}
<button type="submit">Register Me</button>
</form>

@stop
