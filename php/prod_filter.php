<?php 

$errMsg="";
try{
    require_once("connectBooks.php");
    if(isset($_GET["all_filter"])){

        $sql="
        select * 
        from officialprod ";
        $prods=$pdo->query($sql);
        $prodRows=$prods->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($prodRows);
    }


    if(isset($_GET["fork_filter"])){

        $sql="
        select * 
        from officialprod 
        where prodType='cook'";
        $prods=$pdo->query($sql);
        $prodRows=$prods->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($prodRows);
    }

    if(isset($_GET["box_filter"])){

        $sql="
        select * 
        from officialprod 
        where prodType='pd'";
        $prods=$pdo->query($sql);
        $prodRows=$prods->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($prodRows);
    }
    if(isset($_GET["mat_filter"])){

        $sql="
        select * 
        from officialprod 
        where prodType='mat'";
        $prods=$pdo->query($sql);
        $prodRows=$prods->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($prodRows);
    }

    }catch(PDOException $e){
        echo "錯誤：",$e->getMessage(),"<br>";
        echo "行號：",$e->getLine(),"<br>";
      }

      
?>