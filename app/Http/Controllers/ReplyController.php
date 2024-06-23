<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use Illuminate\Support\Facades\Auth;


class ReplyController extends Controller
{
     
    public function create_reply(Post $post, Reply $reply)
{
        $user = Auth::user();

        if (!$user) {
        abort(403, 'Unauthorized action.');
     }
        $users = User::where('id', $user->id)->get();
        $replies = Reply::all();
        return view('posts/create_reply',['post' => $post, 'reply' => $reply, 'replies' => $replies,'users'=>$users]);
    }
    
     
     public function store_reply(ReplyRequest $request, Post $post)
     {
         $userId = $request->input('reply.user_id');
         $user = User::find($userId);

        if (!$user) {
        // エラーハンドリング: ユーザーが存在しない場合
        abort(403, 'Unauthorized action.');
    }
        
        $replyBody = $request->input('reply.body');
        $reply = new Reply();
        $reply->body = $replyBody;
        $reply->post_id = $post->id;
        $reply->user_id = $user->id;
        $reply->save();

        return redirect()->route('posts.show_reply', ['post' => $post->id]);
    }


public function show_reply(Post $post, Reply $reply)
    {
        $replies = $post->replies;
        return view('posts/show_reply',['post'=> $post, 'reply'=>$reply, 'replies'=> $replies]);
    }
}