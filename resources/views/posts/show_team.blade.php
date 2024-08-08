<x-app-layout>
    <x-slot name="header">
        <div class=class="px-1 py-1 bg-emerald-400 text-lg">
            <div class="font-sans font-medium text-xl">
                {{ __('✻ボランティア団体交流広場✻') }}
            </div>
        </div>
    </x-slot>
    <div class="bg-white min-h-screen">
        <div class='content pl-4'>
            <div class='content_post'>
                <div class="edit mt-2 w-20 h-7 bg-orange-400 hover:bg-orange-100 rounded text-lg shadow-md text-white">
                    <a href="/posts/{{$team->id}}/list_edit">　編集</a>
                </div>
            <div class="text-yellow-800">
            <div class="mb-4"></div>
                <h1 class="pl-4">チーム名</h1>
                <p class='name text-3xl font-medium mt-2  pl-6'>{{ $team->name }}</p>
                    <div class="mb-4"></div>
                        <h2 class="pl-4">活動内容</h2>
                        <p class='content text-3xl font-medium mt-2  pl-6'>{{ $team->content }}</p>
                        <div class="mb-4"></div>
                            <h3 class="pl-4">目的</h3>
                            <p class='purpose text-3xl font-medium mt-2  pl-6'>{{ $team->purpose }}</p>
                        <div class="mb-4  pl-4"></div>
                            <h4 class="pl-4">活動場所</h4>
                            <p class='place text-3xl font-medium mt-2  pl-6'>{{ $team->place }}</p>
            </div>
                <div class="text-lg text-sky-800 hover:text-sky-500 pl-4 mt-4">
                    <div class='footer'>
                    <a href='/'>戻る<a/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

