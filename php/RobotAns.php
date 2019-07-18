<?php
    // session_start();
    // $memId = $_REQUEST["memId"];
    // $memPsw = $_REQUEST["memPsw"];

    $errMsg = "";
    try{
        $dsn = "mysql:host=localhost;port=3306;dbname=dd101g4;charset=utf8";

        $user = "root";
        $password = "";

        $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
        $pdo = new PDO($dsn, $user, $password, $options);
        
        if( $_REQUEST["type"] == "text"){
            $sql = "select User_question, questionReply from robot where LOCATE(keyword, :user_message)>0";
            $qa = $pdo->prepare($sql);
            $qa->bindValue(":user_message", $_REQUEST["user_message"]);
            
     
        }else{ //tag使用標籤來查
               $sql = "select * from robot where keyword = :keyword";
               $qa = $pdo->prepare($sql);
               $qa->bindValue(":keyword", $_REQUEST["keyword"]);
        }
        
        $qa->execute();
        if( $qa->rowCount()==0){ //没有符合的關鍵字
          echo "{}";
        }else{
             $qaRow = $qa->fetch(PDO::FETCH_ASSOC);
             echo json_encode($qaRow);
        }
        // echo $qaRow;
     } catch (PDOException $e) {
        $errMsg .=  $e->getMessage(). "<br>"; 
        $errMsg .=  $e->getLine(). "<br>";    
     }
?>