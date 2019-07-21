<?php
session_start();
// $_SESSION["memId"] = "90003";
if (isset($_SESSION["account"])) {
    echo $_SESSION["memName"];
} else {
    echo "notLogin";
}


// session_start();
// $response = array();
// if (isset($_SESSION["memId"])) {
//     $response["success"] = "1";
//     $response["mesg"] = "";
//     $response["memId"] = $_SESSION["memId"];
//     $response["memNo"] = $_SESSION["memNo"];
// } else {
//     $response["success"] = "0";
//     $response["mesg"] = "not login";
// }

// echo json_encode($response);
