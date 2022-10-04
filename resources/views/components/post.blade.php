@props(['post'=>$post])
<div>
<div class=" mb-4">
  <a href="{{route('users.posts',$post->user)}}" class="fw-bold">{{$post->user->name}}</a>
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
</div>