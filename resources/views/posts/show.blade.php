@extends("layouts.app")

@section("content")
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
    <br><br>
    <div>
        {{!!$post->body!!}}
    </div>
    <hr>
    <small>{{$post->created_at}} By {{$post->user->name}}</small>
    <hr>
    {{-- Guest can't see both edit and delete button for change anything --}}
    @if(!Auth::guest())
    {{-- each user can change or delete his own post not another user post --}}
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {{!!Form::open(["action" => ["PostsController@destroy", $post->id], "method" => 'POST', 'class' => "pull-right"])!!}}
            {{Form::hidden('_method' => 'DELETE')}}
            {{Form::submit("Delete", ["class" => "btn btn-danger"])}}
        {{!!Form::close()!!}}
        @endif
    @endif
@endsection