<?php
    if(isset($_SESSION["user_id"])){
        unset($_SESSION["user_id"]);
    }

    header("Location:index.php?action=login");
    exit();
?>