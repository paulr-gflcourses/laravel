@extends('layout.main')

@section('content')
<a class="btn btn-primary" href="{{URL::action('ForumController@getTopicsList')}}">Back to list</a>
<div class="row">
<div class="col-lg-5">
<h1>{{$topic->title}}</h1>
@foreach($posts as $post)
<div class="post alert alert-success">
	<div class="post-head">
		<p>
			<span class="author">{{$post->user->nickname}}</span>
			<span class="ts">{{$post->created_at}}</span>
		</p>
	</div>
	<div class="post-body">
		<p>{{$post->message}}</p>
	</div>
</div>
@endforeach
{{$posts->links()}}

</div>
<div class="col-lg-5">
<h2>New Post</h2>
        <form method="POST" action="{{URL::action('ForumController@postNewPost', $topic->id)}}">
            <div class="form-group">
                <textarea class="form-control" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
@stop
