<x-app-layout>
<x-slot name="header">
         <div class="px-1 py-1 text-lg">
          <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
          </div>
         </div>
    </x-slot>
     <div class="bg-white min-h-screen text-yellow-800">
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
    <form action="{{ route('posts.store_reply', ['post' => $post->id]) }}" method="POST">
            @csrf
     <div class="flex space-x-4 p-4">       
       <div class="user mb-4 pl-4">
    <h2>User</h2>
    <select name="reply[user_id]">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div class="mb-4"></div>
    <div class="pl-6">
<textarea name="reply[body]" placeholder="素敵な投稿です" class="w-80 h-24 p-2">{{old('reply.body')}}</textarea>
          <p class="body__error" style="color:red">{{ $errors->first('reply.body') }}</p>
          
          <div class="flex justify-between">
          <div class="text-lg text-sky-600 hover:text-sky-100 pl-6">
        <div class="footer">
            <a href="/">戻る</a>
            </div>
            </div>
            
          <div class="w-20 h-7 bg-sky-400 hover:bg-sky-100 rounded text-lg text-white shadow-md mr-20">
        <input type="submit" value="　保存"/>
      </form>
     </div>
     </div>
     </div>
        </div>
    </div>
    
  </x-app-layout>

