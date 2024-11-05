<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include_once dirname(__FILE__) . '/navigation.php'; ?>
    </header>
    <h1>新規登録</h1>
    <form action="" method="post">
        タイトル：<input type="text" name="name" id=""><br>
        内容：<textarea name="body" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">登録</button>
    </form>
</body>
</html>