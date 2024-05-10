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
        <h1 class ='title'>
            {{ $post->title }}
        <div class='content'>
            <div class='content_post'>
                <div class="edit">
                <a href="/posts/{{$post->id}}/edit">edit</a>
            </div>
            <h2>チーム名</h2>
                <p1 class='team_name'>{{ $post->team_name }}</p1>
                <h3>本文</h3>
                <p2 class='body'>{{ $post->body }}</p2>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
        </div>
            
        <div class='footer'>
            <a href='/'>戻る</>
    </body>
</html>
