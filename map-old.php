<?php
require_once('load.php');
if (!$login->verify_session()) {
    header('Location: ./login.php');
}
$pageTitle = "Map";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
?>

<div class="section main__section bg-white">
    <div class="container buttons">

        <h1 class="sec__info h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Live Map View </h1>
        <div class="max-w-4xl mx-auto relative z-10 mt-12 px-5 mb-10">

            <div class="grid md:grid-cols-5 grid-cols-2 md:gap-10 gap-5 lg:gap-y-14 lg:my-10 md:text-center">

                <a href="#" onclick="show('Section1');">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Gombe </div>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="show('Section2');">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Oyo </div>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="show('Section3');">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Ekiti </div>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="show('Section4');">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Ondo </div>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="show('Section5');">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Kwara </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <!-- <div id="div1" class="targetDiv"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4034971.4764044485!2d6.433471097152936!3d9.027059005693602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1639678734665!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div> -->
        <div id="Section1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1004595.2460070704!2d10.613928145506978!3d10.405669980528764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10ffd0303a7c3489%3A0x1e64866322127349!2sGombe!5e0!3m2!1sen!2sng!4v1639927707331!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div id="Section2" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022242.9931236529!2d2.5016262224894508!3d8.132668993556326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1036e55e45fb9a45%3A0x9c6be1902ef005e9!2sOyo!5e0!3m2!1sen!2sng!4v1639927922016!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div id="Section3" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012191.3049538676!2d4.767252438673964!3d7.69685262943322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047e00de70f4df3%3A0xdd1fbccfbb2e1e35!2sEkiti!5e0!3m2!1sen!2sng!4v1639927942730!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div id="Section4" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028342.1992166876!2d4.068747788005121!3d6.817698824455937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104749ebffa675fd%3A0x97ada78a0654f682!2sOndo!5e0!3m2!1sen!2sng!4v1639927963034!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
        <div id="Section5" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4034430.125510277!2d2.2245221087309273!3d9.07531744867462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1049a58f5b7cbb31%3A0x9c68dc03e0859dcf!2sKwara!5e0!3m2!1sen!2sng!4v1639928008351!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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

<script type="text/javascript">
    var divs = ["Section1", "Section2", "Section3", "Section4", "Section5"];
    var visibleId = null;

    function show(id) {
        if (visibleId !== id) {
            visibleId = id;
        }
        hide();
    }

    function hide() {
        var div, i, id;
        for (i = 0; i < divs.length; i++) {
            id = divs[i];
            div = document.getElementById(id);
            if (visibleId === id) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
</script>


</body>

</html>