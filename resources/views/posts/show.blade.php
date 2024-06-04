<x-app-layout>
    <x-slot name="header">
         <div class=class="px-1 py-1 bg-emerald-400 text-lg">
         <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
        
         </div>
    </x-slot>
    <div class="bg-white min-h-screen text-yellow-800">
           <div class='content pl-4'>
            <div class='content_post'>
                <div class="edit w-28 h-7 bg-orange-400 hover:bg-orange-100 rounded text-lg shadow-md text-white pl-6">
                <a href="/posts/{{$post->id}}/edit">投稿編集</a>
              </div>
              </div>
              <div class="mb-4"></div>
          <h1 class="pl-4">タイトル</h1>
        <h1 class ='title text-3xl font-medium text-yellow-800 pl-6'>{{ $post->title }}</h1>
        <div class="mb-4"></div>
             <h1 class="pl-4">カテゴリー</h1>
         <a href="/categories/{{ $post->category->id }}" class="text-2xl font-medium text-sky-800 hover:text-sky-500 pl-6">{{ $post->category->name }}</a>
          <div class="mb-4"></div>
            <h2 class="pl-4">チーム名</h2>
         <p class='team_name text-2xl font-medium text-yellow-800 pl-6'>{{ $post->team_name }}</p>
    
         <div class="mb-4"></div>
            <h3 class="pl-4">本文</h3>
                <p class="body mt-4 text-2xl font-medium text-yellow-800 pl-6">{{ $post->body }}</p>
            
             <div class="text-lg text-sky-800 hover:text-sky-500 pl-4 mt-4">
        <div class='footer'>
            <a href='/'>戻る</a>
       </div>
       </div>
       </div>
</div>
  </x-app-layout>

