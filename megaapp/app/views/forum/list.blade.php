@extends('layout.main')


@section('content')

<div class="col-lg-3">
<h1>Forums List</h1>
@foreach($topics as $topic)
<div class="alert alert-info">
<p class="topicstarter"><b>{{$topic->user->nickname}}</b> <i>{{$topic->updated_at}}</i></p>
<p class="topic-title"><a class="alert-link" href="{{URL::action('ForumController@getTopic', $topic->id)}}">{{$topic->title}}</a></p>
<p>Posts: {{$topic->posts_count}} Visits: {{$topic->visits}}</p>
</div>
@endforeach
</div>    


@if(Auth::check())

<div class="col-lg-3 col-lg-offset-2">

<h2>Start new topic</h2>
<form method="POST" action="{{URL::action('ForumController@postNewTopic')}}">
 <div class="form-group">
<input type="text" class="form-control" name="title">
<div class="error">
{{$errors->first('title') }}
</div>
</div>
<button type="submit" class="btn btn-primary">Start</button>
</form>

</div>    
@endif

@stop
