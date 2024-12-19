<!DOCTYPE html>
<html lang="ja">
<x-app-layout>
<x-slot name="header">
    <head>
        <meta charset="utf-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('関係性マスタ') }}
        </h2>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1>ログイン名</h1>
        {{ Auth::user()->name }}
        <br></br>
        <div class='relations'>
            <div class='relation'>
            @foreach ($rels as $rel)
                <div class='relation'>
                    <h1 class='name'>
                        {{ $rel->relation }}
                    </h1>
                </div>
                <div class="edit"><a href="/relation/{{ $rel->id }}/edit">編集する</a></div>
                <form action="/relation/{{ $rel->id }}/delete" id="form_{{ $rel->id }}" method="post">
                @csrf
                <button type="button" onclick="deleterel({{ $rel->id }})">削除！</button> 
                </form>
            @endforeach
        </div>
        <a id="create" href='/relation/create'>作成</a>
        <div class='paginate'>
            {{ $rels->links() }}
        </div>
        <script>
        function deleterel(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
        }
        </script>
    </body>
    </x-app-layout>
</html>