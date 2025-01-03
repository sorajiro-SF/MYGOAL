<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('みんなのプロフィール') }}
        </h2>
        <style>
    </style>
    </x-slot>
    <br></br>
    <div class="profile">
        @foreach($profile as $pro)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="name"  href="/Mprofile/{{$pro->id}}">{{$pro->name}}</a>
                    <p class='kana'>{{$pro->name_kana}}</p>
                    <img class='p_img' src="{{asset('storage/image/'. $pro->image_path)}}"  alt="">
                    <!--画像の大きさを一定にしたいですね-->
                    <div class="edit"><a href="/Mprofile/{{ $pro->id }}/edit">編集する</a></div>

                    <form action="/Mprofile/{{ $pro->id }}/delete" id="form_{{ $pro->id }}" method="post">
                    @csrf
                    <button type="button" onclick="deletepro({{ $pro->id }})">削除！</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <br></br>
        
        <p></p>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href='/Mprofile/create'>新規作成する</a>
                </div>
            </div>
        </div>
        <div class='paginate'>
            <p>{{ $profile->links() }}</p>
        </div>
        </div>
    </div>
    </div>
<!--ここにページネイトつけたいなあ-->
    <script>
        function deletepro(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        }
    </script>
</x-app-layout>