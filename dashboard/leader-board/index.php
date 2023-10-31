<?php
require_once('../load.php');
if (!$login->verify_session()) {
    header('Location: ../login.php');
}


$pageTitle = "Leader Board";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
$link = mysqli_connect("167.99.193.7", 'herosuper', '8f19d5cfa468e3cbd3936331f73e1', 'leader_board');
include __DIR__ . '/templates/header.html.php';
?>

<style>
    /* The Modal (background) */
    . modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    . modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    . close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    . close:hover,
    . close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.1);
        /* Black w/ opacity */
        -webkit-animation-name: fadeIn;
        /* Fade in the background */
        -webkit-animation-duration: 0.4s;
        animation-name: fadeIn;
        animation-duration: 0.4s
    }

    /* Modal Content */
    .modal-content {
        position: fixed;
        top: 70px;
        left: 60px;
        bottom: 15px;
        text-align: center;
        background-color: #fefefe;
        width: 80%;
        -webkit-animation-name: slideIn;
        -webkit-animation-duration: 0.4s;
        animation-name: slideIn;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes slideIn {
        from {
            bottom: -300px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    @keyframes slideIn {
        from {
            bottom: -300px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }
</style>

<link rel="stylesheet" href="assets/main.css" />

<!-- Leader Board Update Section -->
<div class="section main__section bg-white">
    <div class="container">

        <h1 class="sec__info h2"> Leader Board</h1>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 text-center lg:text-left md:mt-24 mt-10" id="state">
            <a href="gombe.php">
                <div>

                    <img src="./assets/images/leader-board/gombe.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
                    <div class="my-3">
                        <h3 class="text-xl font-semibold"> Gombe State</h3>

                        <!-- <p> Desinger </p> -->
                    </div>
                </div>
            </a>
            <a href="oyo.php">

                <div>
                    <img src="./assets/images/leader-board/oyo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
                    <div class="my-3">
                        <h3 class="text-xl font-semibold"> Oyo State</h3>
                        <!-- <p> Desinger </p> -->
                    </div>
                </div>
            </a>
            <a href="ekiti.php">

                <div>
                    <img src="./assets/images/leader-board/ekiti.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
                    <div class="my-3">
                        <h3 class="text-xl font-semibold"> Ekiti State</h3>
                        <!-- <p> Desinger </p> -->
                    </div>
                </div>
            </a>
            <a href="ondo.php">

                <div>
                    <img src="./assets/images/leader-board/ondo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
                    <div class="my-3">
                        <h3 class="text-xl font-semibold"> Ondo State</h3>
                        <!-- <p> Desinger </p> -->
                    </div>
                </div>
            </a>
            <a href="kwara.php">

                <div>
                    <img src="./assets/images/leader-board/ondo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
                    <div class="my-3">
                        <h3 class="text-xl font-semibold"> Kwara State</h3>
                        <!-- <p> Desinger </p> -->
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>





<?php
include __DIR__ . '/templates/footer.html.php';
?>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>