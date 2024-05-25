<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">    
       
    </head>
    <body class="antialiased">
         <div>
             <form action="{{route('index')}}" method="GET">
                 <input type="text" name="keyword" value="{{$keyword}}">
                 <input type="submit" value="検索">
                 </form>
                 </div>

        <h1 class="text-center">ボランティア団体交流広場</h1>
        <a href='/posts/create'>create</a>
        <a href='/posts/registration'>登録</a>
        <a href='/posts/registration/team_list'>団体一覧</a>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <a href ="/posts/{{ $post->id }}"><h2 class='title'>{{$post->title}}</h2></a>
               <p class='team_name'>{{ $post->team_name }}</p>
               <p class='body'>{{ $post->body }}</p>
                 <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
               <button type="button" onclick="deletePost({{$post->id}})">delete</button>
                <a href='/posts/{{$post->id}}/create_reply'>返信</a>
                 <a href='/posts/{{$post->id}}/show_reply'>返信一覧</a>
               </form>
            </div>
            @endforeach
           
           </div>
           
           
          <div class='paginate'>
            {{ $posts->links() }}
        </div>
       <script>
            function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
    </body>
</html>
