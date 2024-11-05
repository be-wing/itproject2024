<?php
//モデルの読み込み
include_once dirname(__FILE__) . '/model/functions.php';

//ログイン確認
loginCheck();

//最初の表示
if($_GET && $_GET['id']){

    $id = $_GET['id'];
    $user_mail = $_SESSION['mail'];

    //セッションのユーザ情報も併せて入れる
    $sql = "SELECT * FROM `bbs` WHERE `id` = {$id} AND user_mail = '{$user_mail}'";
    $data = getData($dbname,$user,$password,$sql);

}else{
    header('Location: ./index.php');
    exit();
}

//登録処理
if($_POST){
    $id = $_GET['id'];
    $title = $_POST['name'];
    $body = $_POST['body'];
    $user_mail = $_SESSION['mail'];

    $sql = "
    UPDATE `bbs` 
    SET 
    `title`='{$title}',
    `body`='{$body}' 
    WHERE 
        `id` = {$id} 
        AND 
        user_mail = '{$user_mail}'
    ";

    //DB登録
    $flag = setData($dbname,$user,$password,$sql);
   
    if($flag){
        //削除の成功
        header('Location: ./index.php');
        exit();
    }else{
        //削除失敗
        echo '更新できませんでした<br>';
    }
}



//HTMLの読み込み
include_once dirname(__FILE__) . '/view/update-view.php';