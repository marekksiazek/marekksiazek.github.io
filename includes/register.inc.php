<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $user_email = $_POST["user_email"];
    $user_pwd = $_POST["user_pwd"];
    $user_pesel = $_POST["user_pesel"];
    $user_phone = $_POST["user_phone"];

    try {

        require_once 'dbh.inc.php';
        require_once 'register_model.inc.php';
        require_once 'register_contr.inc.php';



        require_once 'config_session.inc.php';



        createUser($mysqli,  $first_name,  $last_name,  $user_email,  $user_pwd,  $user_pesel,  $user_phone);

        header("Location: ../index.php");

        $mysqli = null;
        $stmt = null;

        die();
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../register.php");
    die();
}
