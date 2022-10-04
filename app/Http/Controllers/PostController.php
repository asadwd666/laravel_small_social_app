<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
    //    $posts=Post::get();
       ///for example if we have a million posty and we want some of them to be shown
    //    $posts=Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(3);
    //latest work same order by created at desc
       $posts=Post::latest()->with(['user','likes'])->paginate(3);

        return view('posts.index',[
            'posts'=>$posts
            
        ]);
    }
    public function store(request $request){
        $this->validate($request,[
            'body'=>'required'
        ]);
       //instead of passing array we can pass single value as well
    //    $request->user()->posts()->create($request->only('body'));
        $request->user()->posts()->create([
            'body'=>$request->body
        ]);
        return back();
    }
    public function destroy(Post $post){
        // if(!$post->ownedBy(auth()->user())){
        //     dd('no');
        // }
        $this->authorize('delete',$post);
              $post->delete();
              return back();
    }
}
