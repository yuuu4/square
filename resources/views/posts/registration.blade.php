<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1>団体登録</h1>
        <form action="/posts/registration" method="POST">
            @csrf
            <div class='name'>
                <h2>チーム名</h2>
                 <textarea name="team[name]" placeholder="チーム名">{{old('team.name')}}</textarea>
                <p class="name__error" style="color:red">{{ $errors->first('team.name') }}</p>
            </div>
            <div class='content'>
                <h2>活動内容</h2>
                 <textarea name="team[content]" placeholder="活動内容">{{old('team.contennt')}}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('team.content') }}</p>
           </div>
          <div class='purpose'>
          <h2>活動目的</h2>
          <textarea name="team[purpose]" placeholder="活動目的">{{old('team.purpose')}}</textarea>
          <p class="purpose__error" style="color:red">{{ $errors->first('team.purpose') }}</p>
        </div>
        <div class='place'>
          <h2>活動場所</h2>
          <textarea name="team[place]" placeholder="活動場所">{{old('team.place')}}</textarea>
          <p class="place__error" style="color:red">{{ $errors->first('team.place') }}</p>
        </div>
        <input type="submit" value="登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
    </body>
</html>
