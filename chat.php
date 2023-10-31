<?php
require_once('load.php');
// if (!$login->verify_session()) {
//     header('Location: ./login.php');
// }

$pageTitle = "Chat";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
?>

<div class="section main__section bg-white">
    <div class="container">
        <div class="max-w-5xl mx-auto md:mb-20">
            <h1 class="sec__info h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50">Community Chat </h1>
            <div class="container">
                <iframe src="https://deadsimplechat.com/1SFW0ySGl" width="100%" height="600px"></iframe>

            </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>

</html>