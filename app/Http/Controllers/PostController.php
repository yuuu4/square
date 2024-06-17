<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\ReplyRequest;
use App\Models\Category;
use App\Models\Reply;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
   public function index(Request $request, Post $post)
{   
    $category = $request->input('category');
    $keyword = $request->input('keyword');
    
    $categories_list = Category::all();
   
    $query = Post::query();
        

     if (!empty($category) && $category != 'all') {
        $query->where('category_id', $category);
    }
    
    if (!empty($keyword)) {
        $query->where('team_name', 'LIKE', "%{$keyword}%");
    }
    
     if (!empty($category) && !empty($keyword)) {
        $query->where('category_id', $category)
              ->where('team_name', 'LIKE', "%{$keyword}%");
    }
     
    $posts = $query->paginate(5);
    
    $param = [
        'posts' => $posts,
        'keyword' => $keyword,
        'category'=>$category,
        'categories_list' => $categories_list, 
        'items'=>$categories_list
    ];
    

     
    return view('posts.index', $param);
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
    public function store(PostRequest $request, Post $post)
    {
         
        $input =$request['post'];
        $post->fill($input)->save();
        return redirect('/posts/'. $post->id);
        
    }
    public function edit(Post $post, Category $category)
    {
        return view('posts.edit')->with(['post'=>$post])->with(['categories' => $category->get()]);
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
  
  public function like(Request $request)
{
    $user_id = Auth::user()->id; //1.ログインユーザーのid取得
    $post_id = $request->post_id; //2.投稿idの取得
    $already_liked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first(); //3.

    if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
        $like = new Like; //4.Likeクラスのインスタンスを作成
        $like->post_id = $post_id; //Likeインスタンスにpost_id,user_idをセット
        $like->user_id = $user_id;
        $like->save();
    } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
        Like::where('post_id', $post_id)->where('user_id', $user_id)->delete();
    }
    //5.この投稿の最新の総いいね数を取得
    $post_likes_count = Post::withCount('likes')->findOrFail($post_id)->likes_count;
    $param = [
        'post_likes_count' => $post_likes_count,
    ];
    return response()->json($param); //6.JSONデータをjQueryに返す
}
}