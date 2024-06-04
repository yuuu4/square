<x-app-layout>
<x-slot name="header">
         <div class="px-1 py-1 text-lg">
          <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
          </div>
         </div>
    </x-slot>
   <div class="bg-white text-yellow-800">
          <h1 class="pl-4">タイトル</h1>
         <h1 class ='title  text-3xl font-medium text-yellow-800 pl-6'>{{ $post->title }}</h1>
          <div class="mb-4"></div>
             <h2 class="pl-4">カテゴリー</h2>
          <a href="/categories/{{ $post->category->id }}" class="text-2xl font-medium text-sky-800 hover:text-sky-500 pl-6">{{ $post->category->name }}</a>
        <div class='content'>
            <div class='content_post'>
            </div>
            <div class="mb-4"></div>
          <h3 class="pl-4">チーム</h3>
                <p class='team_name text-2xl font-medium text-yellow-800 pl-6'>{{ $post->team_name }}</p>
         <div class="mb-4"></div>
          <h4 class="pl-4">本文</h4>
                <p class='body mt-4 text-2xl font-medium text-yellow-800 pl-6'>{{ $post->body }}</p>
              </div>
              </div>
            <div class="bg-slate-100  text-yellow-800">
          <h5 class="pl-4">返信</h5>
           <div class="mb-4 pl-4">
         @foreach($replies as $reply)
                <a href="" class="font-medium mb-2">{{ $reply->user->name }}</a>
                <p class='body pl-4'>{{ $reply->body }}</p>
              @endforeach
              </div>
               <div class="text-lg text-sky-600 hover:text-sky-100 pl-6">
        <div class='footer'>
            <a href='/posts/{{$post->id}}/create_reply'>戻る<a/>
            
            
    </div>
</div>
</div>
 </x-app-layout>
