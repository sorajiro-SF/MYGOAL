<!DOCTYPE html>
<html lang="ja">
<x-app-layout>
<x-slot name="header">
    <head>
        <meta charset="utf-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('出身地マスタ') }}
        </h2>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1>ログイン名</h1>
        {{ Auth::user()->name }}
        <br></br>
        <div class='froms'>
            <div class='from'>
            @foreach ($froms as $from)
                <div class='from'>
                    <h1 class='name'>
                        {{ $from->from }}
                    </h1>
                </div>
                <div class="edit"><a href="from/{{ $from->id }}/edit">編集する</a></div>
                <form action="/from/{{ $from->id }}/delete" id="form_{{ $from->id }}" method="post">
                @csrf
                <button type="button" onclick="deletefrom({{ $from->id }})">削除</button> 
                </form>
            @endforeach
        </div>
        <a href='/from/create'>作成</a>
        <div class='paginate'>
            {{ $froms->links() }}
        </div>
        <script>
        function deletefrom(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        }
        </script>
    </body>
    </x-app-layout>
</html>