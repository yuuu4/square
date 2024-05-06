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
        <form action="/posts" method="POST">
            @csrf
            <div class='title'>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
          <div class='body'>
          <h2>Body</2>
          <textarea name="post[body]" placeholder="今日も1日お疲れ様でした"></textarea>
          <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
    </body>
</html>
