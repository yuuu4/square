<x-app-layout>
    <x-slot name="header">
         <div class=class="px-1 py-1 bg-emerald-400 text-lg">
         <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
          <div>
             <form action="{{route('index')}}" method="GET">
                 <input type="text" placeholder="チーム名"  name="keyword" value="{{$keyword}}" class="absolute shadow-md text-center text-base top-10.5 right-0 h-7 w-1/3">
                 <input type="submit" value="検索"  class="absolute top-11.5 right-0 h-7 w-10 bg-gray-500 font-mono text-white">
                 </form>
             </div>
         </div>
    </x-slot>
    <div class="bg-white">
        <div class="flex">
        <a href='/posts/create' class="w-80 h-12 bg-emerald-300 hover:bg-green-200 rounded text-base block text-yellow-800 shadow-md">
            　　　☟記事の投稿はこちらから☟
            <span class="text-lg block">　　　　　　記事投稿</span>
            </a>
        <a href='/posts/registration' class="w-80 h-12 bg-emerald-300 hover:bg-green-200 rounded text-base block text-yellow-800 shadow-md">
            　　　　　　　団体を紹介しよう
            <span class="text-lg block">　　　　　　プロフィール登録</span>
            </a>
            <a href='/posts/registration/team_list' class="w-80 h-12 bg-emerald-300 hover:bg-green-200 rounded text-base block text-yellow-800 shadow-md">
            　　　他の団体を覗いてみよう👀
            <span class="text-lg block">　　　　　　団体一覧</span>
            </a>
        </div>
        <div class="text-yellow-800">
            <div class="grid grid-cols-1 md:grid-cols-2  gap-4">
           @foreach($posts as $post)
           <div class="post border p-4 ">
<div class='post'>
    <div class="flex items-center text-4xl font-medium space-x-4">
                <a href="/posts/{{ $post->id }}">
            <h2 class='title'>{{ $post->title }}</h2>
        </a>
        <a href="/categories/{{ $post->category->id }}" class="text-xl  text-sky-600 hover:text-sky-100">{{ $post->category->name }}</a>
        
    <div class="text-xl font-medium">
        <p class='team_name'>{{ $post->team_name }}</p>
    </div></div>
    <div class="text-2xl font-medium mt-2">
        <p class='body'>{{ $post->body }}</p>
    </div>
    <div class="flex space-x-4">
    <div class="mt-2 w-20 h-7 bg-orange-400 hover:bg-orange-100 rounded text-lg shadow-md text-white">
    <a href='/posts/{{$post->id}}/create_reply'>　返信</a></div>
    <div class="mt-2 w-28 h-7 bg-orange-400 hover:bg-orange-100 rounded text-lg shadow-md text-white">
    <a href='/posts/{{$post->id}}/show_reply'>　返信一覧</a>
    </div></div>
    <div class="w-28 h-7 bg-red-600 hover:bg-red-400 mt-2 text-lg text-white rounded shadow-md">
        <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{$post->id}})">　投稿削除</button>
        </form>
    </div>
</div>
</div>
@endforeach
           </div>
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
</div>
</div>
</div>
    </x-app-layout>
