<?php
session_start();
$response = array();

$imgPath = "scss/img/custProd//";  //照片路徑
if (!file_exists($imgPath)) {  //檢查資料夾存不存在
  mkdir($imgPath);
}
if (isset($_SESSION["account"])) {

  // echo $_SESSION["memId"], $_SESSION["memNo"];

  $custName = $_POST['cust_name_data'];
  $custPrice = $_POST['cust_price_data'];
  $imgDataStr = $_POST['hidden_data'];
  $imgDataStr = str_replace('data:image/png;base64,', '', $imgDataStr);
  $imgDataStr = str_replace(' ', '+', $imgDataStr);
  $data = base64_decode($imgDataStr);
  $fileName = date("Ymd");
  $file = $imgPath . $fileName . uniqid() . ".png";
  $success = file_put_contents($file, $data);
  $memNo = $_SESSION["memId"];


  try {
    require_once("connectBooks.php");

    $sql = "insert into custprod (memId, prodPrice, imgPath, prodName,attend ) values (:memId,:prodPrice,:imgPath,:prodName,:attend)";

    $custProd = $pdo->prepare($sql);
    $custProd->bindValue(':memId', $memNo);
    $custProd->bindValue(':prodPrice', $custPrice);
    $custProd->bindValue(':imgPath', $file);
    $custProd->bindValue(':prodName', $custName);
    $custProd->bindValue(':attend', 0);
    // $custProd->bindValue(':ctoPrice', $ctoPrice);
    $custProd->execute();

    // 判斷sql命令執行結果
    if ($custProd) {
      // 成功寫入資料庫

      // 取得寫入資料的編號（會員編號）
      $custProdNo = $pdo->lastInsertId();
      // 寫入 session
      $_SESSION["custProdName"] = $custName;
      $_SESSION["custProdrice"] = $custPrice;
      $_SESSION["custImgPath"] = $file;

      // 回傳資料給 js
      $response["success"] = "1";
      $response["mesg"] = "" . $custName;
    } else {
      $response["success"] = "0";
      $response["mesg"] = "寫入資料庫錯誤";
    }
  } catch (PDOException $e) {
    $response["success"] = "0";
    $response["mesg"] = "資料庫意外錯誤" . $e->getMessage();
    // $errMsg .= "錯誤訊息:" . $e->getMessage() . "<br>";
    // $errMsg .= "行數:" . $e->getLine() . "<br>";
    // echo $errMsg;
  }
} else {
  $response["success"] = "0";
  $response["mesg"] = "請先登入會員";
}

echo json_encode($response);
