<x-app-layout>
<x-slot name="header">
        <div class="px-1 py-1 text-lg">
            <div class="font-sans font-medium text-xl">
            {{ __('✻ボランティア団体交流広場✻') }}
            </div>
        </div>
</x-slot>
        
<div class="bg-white min-h-screen">
    <div class="bg-white min-h-screen text-4xl font-medium text-yellow-800">
        <h1 class="title">団体登録 編集画面</h1>
        <div class="content">
        <form action="/posts/registration/team_list/{{ $team->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <div class='name mt-4 text-2xl pl-10'>
                    <h2>チーム名</h2>
                    <textarea name="team[name]" placeholder="チーム名"  class="w-1/4 h-12 p-2 text-center">{{$team->name}}</textarea>
                    <p class="name__error" style="color:red">{{ $errors->first('team.name') }}</p>
                </div>
            </div>
            <div class='content mt-4 text-2xl pl-10'>
                <div class='content'>
                    <h2>活動内容</h2>
                    <textarea name="team[content]" placeholder="活動内容" class="w-11/12 h-28 p-2 text-center">{{$team->content}}</textarea>
                    <p class="content__error" style="color:red">{{ $errors->first('team.content') }}</p>
                </div>
            </div>
            <div class='purpose mt-4 text-2xl pl-10'>
                <div class='purpose'>
                    <h2>活動目的</h2>
                    <textarea name="team[purpose]" placeholder="活動目的" class="w-11/12 h-28 p-2 text-center">{{$team->purpose}}</textarea>
                    <p class="purpose__error" style="color:red">{{ $errors->first('team.purpose') }}</p>
                </div>
            </div>
            <div class='place'>
                <div class='place mt-4 text-2xl pl-10'>
                    <h2>活動場所</h2>
                    <textarea name="team[place]" placeholder="活動場所" class="w-11/12 h-28 p-2 text-center">{{$team->place}}</textarea>
                    <p class="place__error" style="color:red">{{ $errors->first('team.place') }}</p>
                </div>
            </div>
            <div class="flex mt-2 justify-between">
                <div class="text-lg text-sky-600 hover:text-sky-100 pl-[5%]">
                    <div class="footer">
                        <a href="/posts/registration/team_list">戻る</a>
                    </div>
                </div>
            <div class="w-20 h-7 bg-sky-400 hover:bg-sky-100 rounded text-lg text-white shadow-md mr-20">
                <input type="submit" value="　更新"/>
        </form>
            </div>
            </div>
</x-app-layout>
 