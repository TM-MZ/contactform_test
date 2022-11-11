<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>

<body>
    @if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="/add" method="POST">
        @csrf
        <p>氏名</p>
        <input type="text" name="name">
        <p>メールアドレス</p>
        <input type="text" name="email"><br>
        <input type="submit" value="送信する">
    </form>

</body>

</html>