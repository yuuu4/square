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
            </div>
            <div class='teams'>
         <div>
             <form action="{{route('team_list')}}" method="GET">
                 <input type="text" name="keyword" value="{{$keyword}}">
                 <input type="submit" value="検索">
                 </form>
                 </div>
            @foreach($teams as $team)
            <div class='team'>
               <a href ="/posts/registration/team_list/{{ $team->id }}"><h2 class='name'>{{$team->name}}</h2></a>
                <p class='content'>{{ $team->content }}</p>
                <p class='purpose'>{{ $team->purpose }}</p>
                <p class='place'>{{ $team->place }}</p>
                <form action="/posts/registration/team_list/{{$team->id}}" id="form_{{$team->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteTeam({{$team->id}})">delete</button>
                    </form>
                    </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $teams->links() }}
        </div>
            <script>
                function deleteTeam(id){
                    'use strict'
                    
                    if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                       document.getElementById(`form_${id}`).submit();
                    }
                }
                </script>
        <div class='footer'>
            <a href='/'>戻る</a>
            </div>
    </body>
</html>
