<?php
    session_start();
    // $memId = $_REQUEST['memId'];
    // $memPsw = $_REQUEST['memPsw'];

    $errMsg = '';
    try{
        $dsn = 'mysql:host=localhost; port=3306; dbname=picnicgo; charset=utf8';

        $user = 'root';
        $password = '';

        $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
        $pdo = new PDO($dsn, $user, $password, $options);

        $mem_no = $_REQUEST['memId'];
        
        // Update 資料表 set 欄位1 = 欄位1 + 值 where 欄位2 = 值
        $sql = 'update member set mem_point = mem_point + 50 where mem_no = :mem_no';

        $mem_points = $pdo->prepare($sql); // 編譯指令
        $mem_points->bindValue('50', $mem_point); // 50point 代入資料
        $mem_points->bindValue(':mem_no', $mem_no); // 代入資料
        $mem_points->execute();

    }catch(PDOException $e){
        echo 'FailMsg:', $e->getMessage(), '<br>';
        echo 'FailNbr:', $e->getLine(), '<br>';
    }
?>