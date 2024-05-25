<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\ReplyRequest;
use App\Models\Category;
use App\Models\Reply;



class PostController extends Controller
{
    public function index(Request $request, Post $post)
    {
       $keyword=$request->input('keyword');
        $query=Post::query();
        
        if(!empty($keyword)){
            $query->where('title','LIKE',"%{$keyword}%");
        }
        
        $posts=$query->paginate(5);
        return view('posts.index', compact('posts','keyword'));
    }
   
    /*public function show(Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }*/
     public function show($id)
    {
        $post = Post::findOrFail($id);
        $replies = $post->replies; // 投稿に関連するすべての返信を取得

        return view('posts.show', compact('post', 'replies'));
    }
    
   public function create(Category $category)
{
     return view('posts.create')->with(['categories' => $category->get()]);
}
    public function store(PostRequest $request)
    {
         
        $input =$request['post'];
        $post->fill($input)->save();
        return redirect('/posts/'. $post->id);
        
    }
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post'=>$post]);
    }
    
   public function update(PostRequest $request, Post $post)
{
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/'. $post->id);
}
  public function delete(Post $post)
  {
      $post->delete();
      return redirect('/');
  }
}