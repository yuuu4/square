<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    
    <body class="antialiased">
        <h1>ボランティア団体交流広場</h1>
         <h1 class ='title'>{{ $post->title }}</h1>
        <div class='content'>
            <div class='content_post'>
            </div>
            <h2>チーム名</h2>
                <p1 class='team_name'>{{ $post->team_name }}</p1>
                <h3>本文</h3>
                <p2 class='body'>{{ $post->body }}</p2>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
            
   <h5>返信</h5>
    <form action="{{ route('posts.store_reply', ['post' => $post->id]) }}" method="POST">
            @csrf
            
       <div class="user">
    <h2>User</h2>
    <select name="reply[user_id]">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

       
        
        
        
          <textarea name="reply[body]" placeholder="素敵な投稿です">{{old('reply.body')}}</textarea>
          <p class="body__error" style="color:red">{{ $errors->first('reply.body') }}</p>
        <input type="submit" value="store_reply"/>
      </form>
        <div class="footer">
            <a href="/">戻る</a>
            </div>
    </body>
</html>
