<?php
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'tiket') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'promo') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'maskapai') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    $page = "home";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
}elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
}  else {
    include "main.php";
}
?>