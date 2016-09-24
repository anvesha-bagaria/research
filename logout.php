<?php
if (isset($_COOKIE['c'])) {
    unset($_COOKIE['c']);
    setcookie('c', '', time() - 3600); // empty value and old timestamp
}
header("location:login1.php");
?>