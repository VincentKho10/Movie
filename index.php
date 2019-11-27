<?php
if(empty($_SESSION["logged_as"])){
    $_SESSION["logged"] = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $mn = filter_input(1,"mn");
        switch($mn){
            case "home":
                include_once "home.html";
                break;
            case "login":
                include_once "login.html";
                break;
            case "signup":
                include_once "signup.html";
                break;
            default:
                include_once "home.html";
                break;
        }
    ?>
</body>

</html>
