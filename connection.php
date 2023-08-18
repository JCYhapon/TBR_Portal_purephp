<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "my_database";

session_start();

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["input_email"];
    $password = $_POST["input_password"];

    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $_SESSION["email"] = $email;
        $_SESSION["fullname"] = $row["fullname"];
        $_SESSION["employee_id"] = $row["employee_id"]; // Fetch and store the fullname from the database

        if ($row["usertype"] == "user") {
            header("Location: user_dashboard.php");
        } elseif ($row["usertype"] == "admin") {
            header("Location: admin_dashboard.php");
        } elseif ($row["usertype"] == "accountmanager") {
            header("Location: am_dashboard.php");
        } else {
            echo "Unknown user type";
        }
    } else {
        echo "Username or password is incorrect";
    }
}

?>

