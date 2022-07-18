<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='post'>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onClick="deletePost();return false;">delete</button> 
            </form>
            <a href='/posts/{{ $post->id}}'> </a>
             <h2 class='title'>{{ $post->title }}</h2>
             <p class='body'>{{ $post->body }}</p>
             <P class='updated_at'>{{ $post->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/'>back</a>]</div>
        <script>
        function deletePost() {
            "use script";
            if (confirm('削除すると復元できません。\n本当に削除しますか？'))  {
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </body>
</html>
