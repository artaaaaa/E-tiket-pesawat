<?php
    session_start();
    if(empty($_SESSION['username_travel-go'])){
        header('location:login');
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trave-Go - Aplikasi Pemesanan tiket pesawat online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="height :3000px">
    <!-- Header -->
    <?php include "header.php"; ?>
    <!-- End header -->
    <div class="container-lg">
        <div class="row">
            <!--Sidebar-->

            <!-- End side bar -->
            <?php include "sidebar.php"; ?>
            <!-- Content -->
            <?php
            if (isset($_GET['x']) && $_GET['x'] == 'home'){
                include "home.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'tiket'){
                include "tiket.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'order'){
                include "order.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'promo'){
                include "promo.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'maskapai'){
                include "maskapai.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'user'){
                include "user.php";
            }elseif
                (isset($_GET['x']) && $_GET['x'] == 'report'){
                include "report.php";
            }else{
                include "home.php";
            }
            ?>
            <!-- End Content -->
        </div>
        <div class="fixed-bottom text-center mb-2">Copyright 2023 artha</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>