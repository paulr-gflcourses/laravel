@extends('layout.main')
@section('content')
@if(isset($error))
<p>{{ $error }}</p>
@endif
<form action="" method="post">
<input type="text" name="email" id="email" value="" />
<input type="password" name="password" id="password" value="" />
<button type="submit">Register Me</button>
</form>

@stop
