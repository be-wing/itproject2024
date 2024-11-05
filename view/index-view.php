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
    <h1>TOP</h1>
    <a href="insert.php">新規登録</a>
    <?php foreach($data as $val){?>
        <div class="post">
            <p><?php echo $val['id'] ?>：<?php echo $val['title'] ?></p>
            <p><?php echo $val['body'] ?></p>
            <?php echo $val['create_at'] ?>
            <?php 
                /*
                    $_SESSION['mail'] が在り
                    かつ
                    user_mail と $_SESSION['mail'] が同じ時
                */
                if( 
                    isset($_SESSION['mail'])
                    &&
                    $val['user_mail'] == $_SESSION['mail']
                ){?>
                <a href="./update.php?id=<?php echo $val['id'] ?>">編集</a>
                ｜
                <a href="./delete.php?id=<?php echo $val['id'] ?>">削除</a>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>