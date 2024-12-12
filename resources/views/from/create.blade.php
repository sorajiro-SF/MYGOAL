<!DOCTYPE HTML>
<html lang="ja">
<x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('出身地追加') }}
        </h2>

    </head>
    </x-slot>
    <body>
        <form action="/from" method="POST">
            @csrf
            <div class="title">
                <h2>出身地</h2>
                <input type="text" name="from[name]" placeholder="追加したい出身地を入力してね"
                value="{{ old('from.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('from.name') }}</p>
            </div>
            <input type="submit" value="保存する"/>
            
        </form>
        <p></p>
            <div class="footer">
            <a href="/from">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>