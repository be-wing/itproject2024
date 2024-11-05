<?php
//モデルの読み込み
include_once dirname(__FILE__) . '/model/functions.php';

//ログイン確認
loginCheck();


if($_POST){
    //POST通信があった場合データ登録
    $name = $_POST['name'];
    $body = $_POST['body'];
    $date = date("Y-m-d H:i:s");
    $user_mail = $_SESSION["mail"]; //ログインユーザのメール情報

    $sql = "
    INSERT 
    INTO `bbs`
    (`title`, `body`, `create_at`, `user_mail`)
    VALUES
    ('{$name}','{$body}','{$date }','{$user_mail}')";

    //DB登録
    $flag = setData($dbname,$user,$password,$sql);
   
    if($flag){
        //登録の成功
        header('Location: ./index.php');
        exit();
    }else{
        //登録失敗
        echo '登録できませんでした<br>';
    }
}



//HTMLの読み込み
include_once dirname(__FILE__) . '/view/insert-view.php';