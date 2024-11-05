<?php
//modelの読み込み
include_once dirname(__FILE__) . '/model/functions.php';

//データの取得
$sql = 'SELECT * FROM `bbs`';
$data = getData($dbname,$user,$password,$sql);

//viewの読み込み
include_once dirname(__FILE__) . '/view/index-view.php';