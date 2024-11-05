<?php
//モデルの読み込み
include_once dirname(__FILE__) . '/model/functions.php';

//ログイン確認
loginCheck();

if($_GET && $_GET['id'] !== ''){
    //削除処理
    $id = $_GET['id'];
    $user_mail = $_SESSION['mail'];

    //sqlの作成
    // 削除する ID と user_mail が同じ時削除
    $sql = "DELETE FROM `bbs` WHERE id = {$id} AND user_mail = '{$user_mail}'";
    $flag = setData($dbname,$user,$password,$sql);

    if($flag){
        //削除の成功
        header('Location: ./index.php');
        exit();
    }else{
        //削除失敗
        echo '削除できませんでした<br>';
    }

}else{
    header('Location: ./index.php');
    exit();
}
