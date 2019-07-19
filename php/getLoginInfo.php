<?php
session_start();
// $_SESSION["memId"] = "90003";
if (isset($_SESSION["memId"])) {
    echo $_SESSION["memName"];
} else {
    echo "notLogin";
}
