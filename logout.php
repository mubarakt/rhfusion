<?php
// *** Logout the current user.

if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['username'] = NULL;

unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['role']);
unset($_SESSION['role_no']);

 
header("Location: index_login.php");
exit;

?>