<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
        @csrf
        @method('DELETE')
            <input type="submit" style="display:none">
            [<span onclick="return deletepost(this);">削除</span>]
        </form>
        <div class='footer'>
            <a href="/posts/{{ $post->id }}/edit">編集</a>
            <a href='/'>戻る</a>
        </div>
        <script>
        function deletepost(e){
            if(confirm('本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>
