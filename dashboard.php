<?php
$username = $_POST['username'];
$password = $_POST['password'];

//echo $username . ' ' . $password;

if ($username == "admin" && $password == "admin") {
    header('dashboardAdmin.php');
} else {
    echo "Incorrect login, retry";
}
