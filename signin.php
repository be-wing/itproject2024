<?php
//modelの読み込み
include_once dirname(__FILE__) . '/model/functions.php';


if($_POST){
    $userName = $_POST['user'];
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $error = ''; //エラーメッセージ

    if($userName !== '' && $userEmail !== '' && $userPassword !== ''){
        //メールアドレスの確認
        $sql = "SELECT * FROM `user` WHERE `mail` = '{$userEmail}'";
        $userData = getData($dbname,$user,$password,$sql);


        if(count($userData) < 1){
            //新規登録
            $sql = "
            INSERT
            INTO `user`
            (`id`, `name`, `mail`, `password`)
            VALUES
            (null,'{$userName}','{$userEmail}','{$userPassword}')";

            $result = setData($dbname,$user,$password,$sql);

            if($result){
                //登録成功
                header('Location: ./login.php');
            }else{
                //登録失敗
                $error = '登録に失敗しました。';
            }
        } else {
            //ログインに遷移
            header('Location: ./login.php');
        }
    }else{
        $error = '入力値が足りません';
    }
}


//viewの読み込み
include_once dirname(__FILE__) . '/view/signin-view.php';