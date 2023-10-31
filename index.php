<?php
require_once('load.php');
$pageTitle = "Home";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
?>


<div class="section main__section bg-white">

    <div class="max-w-6xl mx-auto xl:p-0 px-6 md:-my-10">

        <div class="lg:flex items-center -mt-10">
            <div class="relative lg:w-7/12 transform xl:scale-110 lg:translate-x-14 order-2">
                <!-- <img src="./assets/images/racing/bike.png" alt="" class="lg:max-w-full max-w-md mx-auto rounded-2xl shadow-lg"> -->
                <div uk-lightbox>
                    <a href="https://youtu.be/0ZlgRD8z9OE" data-caption="YouTube">
                        <div data-src="./assets/images/racing/bike2.png" class="view-video bg-cover bg-center shadow-1" uk-img>

                            <div class="bg-red-600 rounded-full absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
                                <div class="flex items-center justify-center w-20 h-20 text-white">
                                    <ion-icon name="play" class="text-5xl"></ion-icon>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>

            <div class="space-y-8 lg:w-6/12 lg:-mt-10 mt-5 lg:pl-7">
                <h1 class="h6 font-bold lg:text-left sm:text-center text-left" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Hero SuperOga Road Quest </h1>
                <!-- <p class="info lg:text-left sm:text-center text-left"> This is not yet another bike racing competition, Hero SuperOga Road Quest is Nigeria's first super racing contest backed by the unstoppable machine.</p> -->
                <div class="md:flex font-semibold items-center md:space-x-6 md:md:mb-14 mb-10 md:space-y-0 space-y-4">
                    <a class="btn btn_blue lg:w-auto w-full" href="leader-board.php">Leader Board</a>
                    <a class="btn btn_blue-light lg:w-auto w-full" href="map.php">View Map</a>
                </div>
            </div>
        </div>


    </div>


</div>

<div class=" container">
    <div class="grid sm:grid-cols-2 gap-10 lg:mt-10">



        <div class="bg-white duration-300 flex flex-col hover:shadow-xl items-center px-7 py-10 rounded-xl shadow-sm text-center">
            <a href="chat.php">
                <ion-icon name="chatbox-ellipses-outline" class="bg-gradient-to-tr bg-black inline-block mb-6 px-2.5 py-2 rounded-lg text-3xl text-white text-opacity-90 mt-4"></ion-icon>
                <div class="font-semibold mb-3 md:text-2xl text-lg"> Chat </div>
            </a>
            <!-- <p class="font-medium text-gray-400"> Fact that a reader will be distracted by the readable content of a page.</p> -->
        </div>

        <div class="bg-white duration-300 flex flex-col hover:shadow-xl items-center px-7 py-10 rounded-xl shadow-sm text-center">
            <a href="media.php">

                <ion-icon name="images-outline" class="bg-gradient-to-tr from-red-600 inline-block mb-6 px-2.5 py-2 rounded-lg text-3xl text-white to-purple-500 text-opacity-90 mt-4"></ion-icon>
                <div class="font-semibold mb-3 md:text-2xl text-lg">Media</div>
                <!-- <p class="font-medium text-gray-400"> Variations of passages will be the readable content of a page distracted.</p> -->
            </a>
        </div>
    </div>

</div>

<!-- footer -->

<footer>
    <hr class="border-gr border-gray-100 my-5" />
    <p class="text-base text-gray-400 text-center">
        © <?= date('Y'); ?> Hero Hunter. All rights reserved.
    </p>
</footer>

</body>



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