<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
        ================================================== -->
    <title>Hero Super Oga Road Quest - The Unstoppable Machine | <?= $pageTitle ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="./assets/images/favicon/favicon.ico" rel="icon" type="image/png">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

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
                                <ion-icon name="images-outline" class="mr-2 lg:mr-1"></ion-icon>Media
                            </a> </li>
                        <li> <a href="../leader-board">
                                <ion-icon name="clipboard-outline" class="mr-2 lg:mr-1"></ion-icon>Leader Board
                            </a> </li>
                        <li> <a href="../registered-users.php">
                                <ion-icon name="people-outline" class="mr-2 lg:mr-1"></ion-icon>Registered Users
                            </a> </li>

                        <li><a href="../logout.php" class="btn_buy"> Logout </a></li>
                    </ul>
                </nav>

                <!-- overly for small devices -->
                <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

            </div>
        </div>
    </header>