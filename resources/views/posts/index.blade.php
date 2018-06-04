@extends("layouts.app")

@section("content")
    <h1>Posts</h1>
    @if(count($posts) > 0)
            @foreach($posts as $post)
            <div class="well">
                <div class="col-md-4 col-sm-4">
                    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written On {{$post->created_at}} By {{$post->user->name}}</small>
                </div>
            </div>
            @endforeach
            {{-- For Pagination --}}
            {{-- {{$posts->links()}} --}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection