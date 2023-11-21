<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_email = $_POST["user_email"];
    $user_pwd = $_POST["user_pwd"];


    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        $result = getUser($mysqli, $user_email);

        if (isUserEmailWrong($result)) {
            header("Location: ../wrongLogin.php");
        }

        if (isUserEmailWrong($result) && isUserPasswordWrong($user_pwd, $result["user_pwd"])) {
            header("Location: ../wrongLogin.php");
        }

        require_once "config_session.inc.php";


        // $newSessionId = session_create_id();
        // $sessionId = $newSessionId . "_" . $result["id"];
        // session_id($sessionId);

        // $_SESSION["user_id"] = $result["id"];
        // $_SESSION["user_email"] = htmlspecialchars($result["user_name"]);

        // $_SESSION["last_regeneration"] = time();

        header("Location: ../video.php?login=success");
        $mysqli = null;
        $stmt = null;

        die();
    } catch (\Throwable $th) {
        //throw $th;
    }
} else {
    header("Location: ../index.php");
    die();
}