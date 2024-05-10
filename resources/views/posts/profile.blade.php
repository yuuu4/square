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
                <input type="text" name="post[title]" placeholder="タイトル" value={{old('post.title')}}>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class='team_name'>
                <h2>Team</h2>
                <input type="text" name="post[team_name]" placeholder="チーム名" value={{old('post.team_name')}}>
                <p class="team_name__error" style="color:red">{{ $errors->first('post.team') }}</p>
           </div>
          <div class='body'>
          <h2>Body</2>
          <textarea name="post[body]" placeholder="今日も1日お疲れ様でした">{{old('post.body')}}</textarea>
          <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <div class="category">
            <h2>Category</h2>
            <select name="post[category_id]">
                @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                </div>
        <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
    </body>
</html>
