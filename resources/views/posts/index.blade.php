@extends('layouts.app')
<div class="h-100 bg-secondary bg-gradient h-auto text-dark">
@section('content')
<div class="container  rounded bg-white mt-5 p-4">
  @auth
    <form action="{{route('posts')}}" method="post" class="mb-4">
      @csrf
    <div class="mb-3">
      <div class="h3">
        Post Here
      </div>
  <textarea  class="form-control @error('body') border-danger @enderror" name="body" id="body"  rows="4" col="30">

  </textarea>
  <div class="error text-danger">
  @error('body')
{{$message}}
  @enderror
  </div>
</div>
<button class="btn btn-secondary"  >Post</button>
    </form>
@endauth

    @if($posts->count())
  @foreach($posts as $post)
  <div class=" mb-4">
  <h6 class="fw-bold">{{$post->user->name}}</h6>
  <span class="opacity-50"><small>{{$post->created_at->diffForHumans()}}</small> </span>
  <p class="mb-2">{{$post->body}}</p>

<div class="btn-group">
  @auth
  @if(!$post->likedBy(auth()->user()))
  <form action="{{route('posts.likes',$post->id)}}" method="post" class="row" >
    @csrf
    <button class="btn text-primary" >Like</button>
  </form>
 
<!-- ///if one like so thiere need to show singular value of likes which is like   -->


   @else
  <form action="{{route('posts.likes',$post->id)}}" method="post" >
    @csrf
    @method('DELETE')
    <button class="btn text-primary">Unlike</button>
  </form>
  @endif
@can('delete',$post)
  <form action="{{route('posts.destroy',$post)}}" method="post" >
    @csrf
    @method('DELETE')
    <button class="btn text-primary">Delete Post</button>
  </form>
  @endcan



  @endauth
  
  <p class="mt-2 mx-1">{{$post->likes->count()}}

{{Str::plural('like',$post->likes->count())}}</p>
</div>


  </div>
  @endforeach
    
  {{$posts->links()}}
    @else
<p>no record</p>
    @endif
</div>
<br><br>
</div>
@endsection