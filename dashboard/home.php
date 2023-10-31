<?php
$pageTitle = "Admin Dashboard";
include __DIR__ . '/templates/header.html.php';
?>
<div class="section main__section bg-white">
    <div class="container">
        <div class="max-w-5xl mx-auto md:mb-20">

            <h1 class="sec__title h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50">Welcome to the Admin Dashboard</h1>
            <div class="sec__info info">You can update the front facing side of this application using the options presented below</div>

            <div class="md:flex font-semibold items-center justify-center md:space-x-6 md:md:mb-14 mb-10 md:space-y-0 space-y-4">
                <a href="media-update" class="btn btn_blue md:w-auto w-full">Media Update</a>
                <a href="leader-board" class="btn btn_blue-light md:w-auto w-full">Leader Board Update</a>
                <a href="registered-users.php" class="btn btn_blue md:w-auto w-full">Registered Users</a>
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