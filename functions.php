<?php

    // DB接続の設定
// DB名は`gsacf_x00_00`にする

function connect_to_db()
{
    $dbn = 'mysql:dbname=gsacf_d07_08;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';

    try {
    // ここでDB接続処理を実行
    return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    // DB接続に四杯した場合はここでエラーを出力し、以降の処理を中止する
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
    }
}
// { 
    // $dbn='mysql:dbname=gsacf_d07_08;charset=utf8;port=3306;host=localhost';
    // $user = 'root';
    // $pwd = '';
    // try {
    //    return new PDO($dbn, $user, $pwd);
    // } catch (PDOException $e) {
    //    exit('dbError:'.$e->getMessage());
    // }
// }

    include('functions.php'); // 関数を記述したファイルの読み込み
    $pdo = connect_to_db(); // 関数実行