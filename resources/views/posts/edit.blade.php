<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1 class="title">編集画面</h1>
        <div class="content">
       <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
            <div class='title'>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value={{$post->title}}>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class='team'>
                <h2>Team</h2>
                <input type="text" name="post[team_name]" placeholder="チーム名" value={{$post->team_name}}>
                <p class="team__error" style="color:red">{{ $errors->first('post.team') }}</p>
           </div>
          <div class='body'>
          <h2>Body</2>
          <textarea name="post[body]" placeholder="今日も1日お疲れ様でした">{{$post->body}}</textarea>
          <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        
        <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="/posts/{{$post->id}}">戻る</a>
    </body>
</html>
