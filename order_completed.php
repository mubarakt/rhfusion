<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['status'] == true) {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
    $role_no = $_SESSION['role_no'];
    
} else {
  
    echo '<script type="text/javascript">alert("Please Login First");window.location=\'index_login.php\';</script>';
}
?>
<html><head>
<link href="./main.css" rel="stylesheet"></head>
<?php include "functions.php";
rep_completed();
 ?>



</html>
