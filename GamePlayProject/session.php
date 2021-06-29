<?php

$user = $_SESSION["userId"];
    if (session_status() !== PHP_SESSION_NONE) {
        echo $user;
    }
?>