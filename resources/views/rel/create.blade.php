<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>作成場面</title>
    </head>
    <body>
        <h1>relation作成</h1>
        <form action="/relation" method="POST">
            @csrf
            <div class="title">
                <h2>関係性</h2>
                <input type="text" name="relation[name]" placeholder="追加したい関係性を入力してね"
                value="{{ old('relation.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('relation.name') }}</p>
            </div>

            <input type="submit" value="保存する"/>

            <div class="footer">
            <a href="/">戻る</a>
        </div>
        </form>
    </body>
</html>