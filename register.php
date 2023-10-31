<?php
require_once('load.php');
$name = "";
$phone = "";
$email = "";
// Handle registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $register_status = $login->register($_POST);
    $name = empty($_POST["name"]) ? $name : $_POST["name"];
    $email = empty($_POST["email"]) ?  $email: $_POST["email"];
    $phone = empty($_POST["phone"]) ? $phone : $_POST["phone"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <title>Hero Super Oga Road Quest - The Unstoppable Machine | Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link href="./assets/images/favicon/favicon.ico" rel="icon" type="image/png">

    <!-- icons
        ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css" />

    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet" />

    <style>
        html,
        body {
            background-color: #f9fafb;
        }

        input,
        .bootstrap-select.btn-group button {
            background-color: #f3f4f6 !important;
            height: 44px !important;
            box-shadow: none !important;
        }

        .message {
            padding: 0 10px;
            margin-bottom: 15px;
            border-width: 1px;
            border-style: solid;
        }

        .message.error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .message.success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
</head>

<body>
    <div id="wrapper" class="horizontal">
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
                    <!-- <nav class="header_menu">
                        <ul>
                            <li> <a href="media.php">Media</a> </li>
                            <li> <a href="about.php">About Us</a> </li>
                            <li> <a href="map.php">Map View</a> </li>
                            <li> <a href="leader-board.php">Leader Board</a> </li>
                            <li> <a href="chat.php">Chat</a> </li>
                        </ul>
                    </nav> -->

                    <a href="login.php" class="btn_buy"> Login </a>

                    <!-- overly for small devices -->
                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
            </div>
        </header>
        <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6">
            <form method="post" class="lg:p-10 p-6 space-y-6 relative bg-white shadow-xl rounded-md">
                <h1 class="lg:text-2xl text-xl font-semibold mb-6">Register</h1>

                <?php if (isset($register_status)) : ?>

                    <?php
                    if ($register_status['status'] == true) {
                        $class = 'success';
                        header("Location: ./home.php");
                    } else {
                        $class = 'error';
                    }
                    ?>
                    <div class="message <?php echo $class; ?>">
                        <p><?php echo $register_status['message']; ?></p>
                    </div>
                <?php endif; ?>

                <div>
                    <label for="name"> Name </label>
                    <input value='<?php echo $name; ?>' type="text" id="name" name="name" placeholder="Kola Banye" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" />
                </div>
                <div>
                    <label for="phone"> Phone Number </label>
                    <input  value='<?php echo $phone; ?>' type="tel" id="phone" name="phone" placeholder="eg. 09036672654" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" />
                </div>
                <div>
                    <label for="email"> Email </label>
                    <input  value='<?php echo $email; ?>' type="email" id="email" name="email" placeholder="someone@email.com" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" />
                </div>
                <!-- <div>
                    <label for="password"> Password </label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" />
                </div>
 -->
                <div>
                    <button type="submit" class="
                bg-red-600
                font-semibold
                p-2.5
                mt-5
                rounded-md
                text-center text-white
                w-full
              ">
                        Register
                    </button>
                </div>

                <div class="uk-heading-line uk-text-center py-5">
                    <span> Already have an account? </span>
                </div>

                <div>
                    <button onclick="window.location.href='./login.php'" type="button" class="
                bg-black
                font-semibold
                p-2.5
                mt-5
                rounded-md
                text-center text-white
                w-full
              ">
                        Login
                    </button>
                </div>
            </form>

            <!-- footer -->

            <footer>
                <hr class="border-gr border-gray-100 my-5" />
                <p class="text-base text-gray-400 text-center">
                    © 2021 Hero Hunter. All rights reserved.
                </p>
            </footer>
        </div>

        <!-- Javascript
    ================================================== -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="assets/js/uikit.js"></script>
        <script src="assets/js/tippy.all.min.js"></script>
        <script src="assets/js/simplebar.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>