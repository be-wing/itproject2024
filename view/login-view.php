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
    <h1>ログイン</h1>
    <?php
        if( isset($error) && $error != ''){
            echo '<p>';
            echo $error;
            echo '</p>';
        }
    ?>
    <form action="login.php" method="post">
        名前<input type="text" name="user"><br>
        メールアドレス<input type="email" name="email"><br>
        パスワード<input type="text" name="password"><br>
        <button type="submit">ログイン</button>
    </form>
</body>
</html>