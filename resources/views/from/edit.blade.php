<!DOCTYPE html>
<html lang="ja">
<x-app-layout>
<x-slot name="header">
    <head>
        <meta charset="utf-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('出身地編集') }}
        </h2>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
<body>
    <div class="content">
        <form action="/from/{{ $from->id }}" method="POST">
            @csrf
            <div class='from_edit'>
                <h2>出身地</h2>
                <input type='text' name='from[name]' value="{{  $from->from  }}">
                <p class="title__error" style="color:red">{{ $errors->first('from.name') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    <div class="footer">
            <a href="/from">戻る</a>
    </div>
</body>
</x-app-layout>
</html>