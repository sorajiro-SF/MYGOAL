<!DOCTYPE HTML>
<html lang="ja">
<x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('relation作成') }}
        </h2>

    </head>
    </x-slot>
    <body>
        <form action="/relation" method="POST">
            @csrf
            <div class="title">
                <h2>関係性</h2>
                <input type="text" name="relation[name]" placeholder="追加したい関係性を入力してね"
                value="{{ old('relation.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('relation.name') }}</p>
            </div>

            <input type="submit" value="保存する"/>
            <p></p>
            <div class="footer">
            <a href="/">戻る</a>
        </div>
        </form>
    </body>
    </x-app-layout>
</html>