<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>編集</h1>
    <form action="" method="post">
        タイトル：<input type="text" name="name" id="" value="<?php echo $data[0]['title'] ?>"><br>
        内容：<textarea name="body" id="" cols="30" rows="10"><?php echo $data[0]['body'] ?></textarea><br>
        <button type="submit">登録</button>
    </form>
</body>
</html>