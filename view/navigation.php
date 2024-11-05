<?php
$dir = '/20241029/';
?>

<?php if(isset($_SESSION["user"])){ ?>
    <p>
        <?php echo $_SESSION["user"]; ?> さん ログイン中です<br>
        <?php echo $_SESSION["mail"]; ?>
    </p>
<?php } ?>

<nav>
    <ul>
        <li><a href="<?php echo $dir ?>">HOME</a></li>
        <li><a href="<?php echo $dir ?>login.php">ログイン</a></li>
        <li><a href="<?php echo $dir ?>signin.php">新規登録</a></li>
        <li><a href="<?php echo $dir ?>logout.php">ログアウト</a></li>
    </ul>
</nav>