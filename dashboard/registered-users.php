<?php
require_once('load.php');
if (!$login->verify_session()) {
    header('Location: ./login.php');
}
// $pageTitle = "Admin Dashboard";
include __DIR__ . '/templates/header.html.php';
define('DB_HOST', '167.99.193.7');
define('DB_USERNAME', 'herosuper');
define('DB_PASSWORD', '8f19d5cfa468e3cbd3936331f73e1');
define('DB_NAME', 'login_script');


$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>
<div class="section relative bg-gray-50">
    <div class="-top-20 absolute w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="text-gray-50 fill-current">
            <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
        </svg>
    </div>
    <div class="container relative">

        <h1 class="sec__info h2 mb-5" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Registered Users </h1>
        <!-- <p class="sec__info info"> Find the right job for you no matter what it is that you do.</p> -->
        <div class="flex justify-center">
            <a href="#" class="btn btn_blue-light btn_more" onclick="location.href = 'download-registered-users.php';">Export as Excel</a>
        </div>

        <div class="md:mt-24 mt-12 md:space-y-24 space-y-12" id="opening">

            <div>
                <!-- position list -->
                <div class="bg-white shadow-md rounded-lg divide-y divide-gray-100 font-medium">

                    <div class="md:grid grid-cols-5 px-8 py-4 text-gray-800 bg-gray-50 uppercase text-base backdrop-filter backdrop-blur-lg bg-opacity-60 hidden" uk-sticky="offset:80;bottom: true;media:992;animation: uk-animation-slide-top-medium; cls-active: border-b">
                        <div class="md:col-span-2 col-span-2">Name</div>
                        <div class="md:col-span-2">Email</div>
                        <div>Phone</div>
                    </div>

                    <?php

                    $query = "SELECT * FROM users ORDER BY id DESC ";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];

                    ?>

                            <a class="grid md:grid-cols-5 md:px-8 md:py-9 p-6 gap-y-4 items-center hover:bg-gray-50 duration-300" href="career-single.html">
                                <div class="md:col-span-2 col-span-2">
                                    <div class="text-black md:text-xl text-lg mb-1.5"> <?= $name; ?> </div>
                                    <!-- <div class="text-gray-500 md:text-base text-sm font-normal"> software engineers develop the next-generation technologies. </div> -->
                                </div>
                                <div class="md:col-span-2"><?= $email; ?></div>
                                <div><?= $phone; ?> </div>
                            </a>

                    <?php
                        }
                    } ?>

                </div>

            </div>
            <div>

            </div>

        </div>



    </div>
</div>


<?php
include __DIR__ . '/templates/footer.html.php';
?>

</body>


<!-- Javascript
================================================== -->
<script src="assets/js/uikit.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>

</html>