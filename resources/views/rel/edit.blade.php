<!DOCTYPE html>
<html lang="ja">
<x-app-layout>
<x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Relation_edit</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
<body>
    <h1 class="title">編集</h1>
    <div class="content">
        <form action="/relation/{{ $rel->id }}" method="POST">
            @csrf
            <div class='relartion_edit'>
                <h2>関係性</h2>
                <input type='text' name='relation[name]' value="{{  $rel->relation  }}">
                <p class="title__error" style="color:red">{{ $errors->first('relation.name') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    <div class="footer">
            <a href="/">戻る</a>
    </div>
</body>
</x-app-layout>
</html>