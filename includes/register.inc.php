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
        require_once 'register_contr.inc.php';
        require_once 'config_session.inc.php';
        require_once '../openpayu_php/lib/openpayu.php';
        require_once '../openpayu_php/examples/config.php';
        require_once '../openpayu_php/examples/v2/order/OrderCreate.php';

        function getUser2(object $mysqli, string $user_email) {

            $query = "SELECT * FROM users WHERE user_email = (?)";
            $stmt = $mysqli->prepare($query);
            mysqli_stmt_bind_param($stmt, 's', $user_email);
            $stmt->execute();

            $result = $stmt->fetch();
            var_dump($result);
            return $result;
        }

        $user = getUser2($mysqli, $user_email);

        if ($user) {
            header("Location: ../userExists.php");
        };

        createUser($mysqli,  $first_name,  $last_name,  $user_email,  $user_pwd,  $user_pesel,  $user_phone);

        header("Location: "  .  $response->getResponse()->redirectUri);

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
