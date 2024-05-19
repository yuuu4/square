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
        <div class='content'>
            <div class='content_post'>
                <div class="edit">
                <a href="/posts/{{$team->id}}/list_edit">edit</a>
            </div>
             <h1>チーム名</h1>
          <p class='name'>{{ $team->name }}</p>
            <h2>活動内容</h2>
                <p class='content'>{{ $team->content }}</p>
                 <h3>目的</h3>
                <p class='purpose'>{{ $team->purpose }}</p>
                 <h4>活動場所</h4>
                <p class='place'>{{ $team->place }}</p>
               
        <div class='footer'>
            <a href='/'>戻る</>
    </body>
</html>
