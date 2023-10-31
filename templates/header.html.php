<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
        ================================================== -->
    <title>Hero Super Oga Road Quest - The Unstoppable Machine | <?= $pageTitle ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hero Super Oga Road Quest">

    <!-- Favicon -->
    <link href="./assets/images/favicon/favicon.ico" rel="icon" type="image/png">

    <!-- icons
        ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/share-btn.css">
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

    <!--  Header  -->
    <header class="border-none is-transparent backdrop-filter backdrop-blur-2xl bg-opacity-80" uk-sticky="cls-inactive:is-transparent border-none ; cls-active:has-shadow">
        <div class="header_inner">
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="index.php">
                        <img src="./assets/images/logo/logo.png" alt="">
                        <img src="assets/images/logo/logo.png" class="logo_inverse" alt="">
                        <img src="assets/images/logo/logo.png" class="logo_mobile" alt="">
                    </a>
                </div>

                <!-- icon menu for mobile -->
                <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible">
                </div>

            </div>
            <div class="right-side">

                <!-- menu bar for mobile -->
                <nav class="header_menu">
                    <ul>
                        <li> <a href="index.php">
                                <ion-icon name="home-outline" class="mr-2 lg:mr-1"></ion-icon>Home
                            </a> </li>
                        <li> <a href="media.php">
                                <ion-icon name="images-outline" class="mr-2 lg:mr-1"></ion-icon>Media
                            </a> </li>
                        <!-- <li> <a href="about.php">About</a> </li> -->
                        <li> <a href="map.php">
                                <ion-icon name="map-outline" class="mr-2 lg:mr-1"></ion-icon>Map View
                            </a> </li>
                        <li> <a href="leader-board.php">
                                <ion-icon name="stats-chart-outline" class="mr-2 lg:mr-1"></ion-icon>Leader Board
                            </a> </li>
                        <li> <a href="chat.php">
                                <ion-icon name="chatbubbles-outline" class="mr-2 lg:mr-1"></ion-icon>Chat
                            </a> </li>
                        <li> <a href="logout.php" class="md:invisible">
                                <ion-icon name="log-out-outline" class="mr-2 lg:mr-1"></ion-icon>Logout
                            </a> </li>

                    </ul>
                </nav>

                <?php
                require_once('load.php');
                if (!$login->verify_session()) {
                    echo '<a href="register.php" class="btn_buy"> Register </a>';
                } else {
                    echo '<a href="logout.php" class="btn_buy"> Logout </a>';
                }
                ?>

                <!-- overly for small devices -->
                <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

            </div>
        </div>
    </header>