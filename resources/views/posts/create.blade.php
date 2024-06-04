<x-app-layout>
<x-slot name="header">
         <div class="px-1 py-1 text-lg">
          <div class="font-sans font-medium text-xl">
            {{ _('✻ボランティア団体交流広場✻') }}
          </div>
         </div>
    </x-slot>
        
    <div class="bg-white min-h-screen text-yellow-800">
        <form action="/posts" method="POST">
            @csrf
            <div class="flex space-x-4">
            <div class='title pl-[5%]'>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}" class="w-80 text-center">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
             <div class="category">
            <h2>Category</h2>
            <select name="post[category_id]">
                @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
                </div>
            <div class='team_name'>
                <h2>Team</h2>
                <input type="text" name="post[team_name]" placeholder="チーム名" value="{{old('post.team_name')}}" class="w-80 text-center">
                <p class="team_name__error" style="color:red">{{ $errors->first('post.team') }}</p>
           </div></div>
          <div class='body mt-6 flex flex-col pl-[5%]'>
          <h2>Body</h2>
          <textarea name="post[body]" placeholder="今日も1日お疲れ様でした" class="w-11/12 h-64 p-2">{{old('post.body')}}</textarea>
          <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        
    <div class="flex justify-between">
                <div class="text-lg text-sky-600 hover:text-sky-100 pl-[5%]">
                    <a href="/">戻る</a>
                </div>
                <div class="w-20 h-7 bg-sky-400 hover:bg-sky-100 rounded text-lg text-white shadow-md mr-20">
                    <input type="submit" value="　保存"/>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
 

