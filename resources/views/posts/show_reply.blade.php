<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        .title {
            font-size: 30px; /* タイトルのフォントサイズを24pxに設定 */
        }

        .body {
            font-size: 16px; /* 本文のフォントサイズを16pxに設定 */
        }

        .edit {
            font-size: 20px; /* 編集リンクのフォントサイズを14pxに設定 */
        }
        .footer {
            font-size: 20px;
        }
    </style>

        
    </head>
    <body class="antialiased">
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
            </div>
             <h1>返信</h1>
         @foreach($replies as $reply)
                <a href="">{{ $reply->user->name }}</a>
                <p class='body'>{{ $reply->body }}</p>
              @endforeach
        <div class='footer'>
            <a href='/posts/{{$post->id}}/create_reply'>戻る<a/>
    </body>
</html>
