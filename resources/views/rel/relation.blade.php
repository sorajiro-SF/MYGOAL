<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Relation</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>関係性マスタ</h1>
        <div class='relations'>
            <div class='relation'>
            @foreach ($rels as $rel)
                <div class='relation'>
                    <h2 class='name'>
                        {{ $rel->relation }}
                    </h2>
                </div>
                <div class="edit"><a href="/relation/{{ $rel->id }}/edit">編集する</a></div>
                <form action="/relation/{{ $rel->id }}/delete" id="form_{{ $rel->id }}" method="post">
                @csrf
                <button type="button" onclick="deleterel({{ $rel->id }})">削除！</button> 
                </form>
            @endforeach
        </div>
        <a href='/relation/create'>作成</a>
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
</html>