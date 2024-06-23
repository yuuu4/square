<x-app-layout>
    <x-slot name="header">
        <div class=class="px-1 py-1 bg-emerald-400 text-lg">
            <div class="font-sans font-medium text-xl">
                {{ __('✻ボランティア団体交流広場✻') }}
            </div>
                <form action="{{route('index')}}" method="GET">
                    <input type="text" placeholder="チーム名"  name="keyword" value="{{$keyword}}" class="absolute shadow-md text-center text-base top-10.5 right-0 h-7 w-1/3">
                    <input type="submit" value="検索"  class="absolute top-11.5 right-0 h-7 w-10 bg-gray-500 font-mono text-white">
                </form>
        </div>
    </x-slot>
    <div class="bg-white min-h-screen">
        <div class='teams'>
            <div class="text-yellow-800">
                <div class="grid grid-cols-1 md:grid-cols-2  gap-4">
                    @foreach($teams as $team)
                    <div class="post border p-4 ">
                        <div class='team'>
                        <div class="mb-4"></div>
                            <h1>チーム名</h1>
                            <a href ="/posts/registration/team_list/{{ $team->id }}" class="text-2xl font-medium mt-2"><h2 class='name'>{{$team->name}}</h2></a>
                            <div class="mb-4"></div>
                                <h2>活動内容</h2>
                                <p class='content text-2xl font-medium mt-2'>{{ $team->content }}</p>
                            <div class="mb-4"></div>
                                <h3>活動目的</h3>
                                <p class='purpose text-2xl font-medium mt-2'>{{ $team->purpose }}</p>
                            <div class="mb-4"></div>
                                <h4>活動場所</h4>
                                <p class='place text-2xl font-medium mt-2'>{{ $team->place }}</p>
                            <div class="w-28 h-7 bg-red-600 hover:bg-red-400 mt-2 text-lg text-white rounded shadow-md">
                                <form action="/posts/registration/team_list/{{$team->id}}" id="form_{{$team->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="deleteTeam({{$team->id}})">　投稿削除</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
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
        <div class="text-lg text-sky-800 hover:text-sky-500 pl-[5%] mt-4">
            <div class='footer'>
                <a href='/'>戻る<a/>
            </div>
        </div>
 </x-app-layout>

