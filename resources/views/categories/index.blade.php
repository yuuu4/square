<x-app-layout>
<x-slot name="header">
         <div class="px-1 py-1 text-lg">
          <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
          </div>
         </div>
</x-slot>
<div class="bg-white min-h-screen text-yellow-800">
        <div class='posts'>
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
        </div>
    </div>
    <div class="text-2xl font-medium mt-2">
        <p class='body'>{{ $post->body }}</p>
           </div>
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
            function deletePost(id){
                'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
               document.getElementById('form_${id}').submit();
            }
            }
            </script>
            <div class="text-lg text-sky-600 hover:text-sky-100 pl-[5%]">
                    <a href="/">戻る</a>
                </div>
    </x-app-layout>
