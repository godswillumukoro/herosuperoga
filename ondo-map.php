<?php
require_once('load.php');
if (!$login->verify_session()) {
    header('Location: ./login.php');
}
$pageTitle = "Map";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
$mysqli = new mysqli("167.99.193.7", 'herosuper', '8f19d5cfa468e3cbd3936331f73e1', 'leader_board') or die(mysqli_error($mysqli));

?>

<style>
    .maps {
        height: 60vh;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }
</style>

<div class="section main__section bg-white">
    <div class="container buttons">

        <h1 class="sec__info h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Live Map View </h1>
        <div class="max-w-4xl mx-auto relative z-10 mt-12 px-5 mb-10">

            <div class="grid md:grid-cols-5 grid-cols-2 md:gap-10 gap-5 lg:gap-y-14 lg:my-10 md:text-center">

                <a href="map.php">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Gombe </div>
                        </div>
                    </div>
                </a>
                <a href="oyo-map.php">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Oyo </div>
                        </div>
                    </div>
                </a>
                <a href="ekiti-map.php">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Ekiti </div>
                        </div>
                    </div>
                </a>
                <a href="ondo-map.php">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Ondo </div>
                        </div>
                    </div>
                </a>
                <a href="kwara-map.php">
                    <div class="bg-white rounded-xl shadow-md transform hover:scale-105 duration-300 hover:shadow-xl hover:-translate-y-1.5">
                        <div class="flex md:flex-col d:py-7 p-4 md:space-y-3">
                            <div class="font-semibold md:text-lg text-base"> Kwara </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="ondo-map" class="maps"></div>
    </div>
</div>


<?php

// One
$result1 = $mysqli->query("SELECT `name`, `lat`, `longitude` FROM ondo_rider_list WHERE `position` = 1") or die($mysqli->error);
$row1 = $result1->fetch_assoc();

$lat1 = $row1['lat'];
$long1 = $row1['longitude'];
$name1 = $row1['name'];

// Two
$result2 = $mysqli->query("SELECT `name`, `lat`, `longitude` FROM ondo_rider_list WHERE `position` = 2") or die($mysqli->error);
$row2 = $result2->fetch_assoc();

$lat2 = $row2['lat'];
$long2 = $row2['longitude'];
$name2 = $row2['name'];

// Three
$result3 = $mysqli->query("SELECT `name`, `lat`, `longitude` FROM ondo_rider_list WHERE `position` = 3") or die($mysqli->error);
$row3 = $result3->fetch_assoc();

$lat3 = $row3['lat'];
$long3 = $row3['longitude'];
$name3 = $row3['name'];

// Four
$result4 = $mysqli->query("SELECT `name`, `lat`, `longitude` FROM ondo_rider_list WHERE `position` = 4") or die($mysqli->error);
$row4 = $result4->fetch_assoc();

$lat4 = $row4['lat'];
$long4 = $row4['longitude'];
$name4 = $row4['name'];

// Five
$result5 = $mysqli->query("SELECT `name`, `lat`, `longitude` FROM ondo_rider_list WHERE `position` = 5") or die($mysqli->error);
$row5 = $result5->fetch_assoc();

$lat5 = $row5['lat'];
$long5 = $row5['longitude'];
$name5 = $row5['name'];

?>

<script>
    function InitMap() {
        map = new google.maps.Map(document.getElementById('ondo-map'), {
            center: {
                lat: <?= $lat1; ?>,
                lng: <?= $long1; ?>,
            },
            zoom: 8,
            mapId: '116c04d903f08d87'
        });

        // Name
        // Latitude, Longitude
        // Image URL
        // scaledSize width, height
        const markers = [
            [
                "Hero SuperOga Road Quest",
                <?= $lat1; ?>,
                <?= $long1; ?>,
                './map-img/logo.png',
                57,
                46
            ],
            [
                "Hero SuperOga Road Quest",
                <?= $lat2; ?>,
                <?= $long2; ?>,
                './map-img/logo.png',
                57,
                46

            ],
            [
                "Hero SuperOga Road Quest",
                <?= $lat3; ?>,
                <?= $long3; ?>,
                './map-img/logo.png',
                57,
                46

            ],
            [
                "Hero SuperOga Road Quest",
                <?= $lat4; ?>,
                <?= $long4; ?>,
                './map-img/logo.png',
                57,
                46

            ],
            [
                "Hero SuperOga Road Quest",
                <?= $lat5; ?>,
                <?= $long5; ?>,
                './map-img/logo.png',
                57,
                46
            ],
        ];

        for (let i = 0; i < markers.length; i++) {
            const currMarker = markers[i];
            const marker = new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: {
                    lat: currMarker[1],
                    lng: currMarker[2]
                },
                map,
                title: currMarker[0],
                icon: {
                    url: currMarker[3],
                    scaledSize: new google.maps.Size(currMarker[4], currMarker[5]),
                }
            });

            const infowindow = new google.maps.InfoWindow({
                content: currMarker[0],
            });

            marker.addListener("click", () => {
                infowindow.open(map, marker);
            });
        }

    }
</script>

<?php
include __DIR__ . '/templates/footer.html.php';
?>
<!-- Javascript==================================================-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

<!-- <script src="./assets/js/maps.js"></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALeCyMeHKbpPpPnIozadxNtqFLvl2SI1g&callback=InitMap"></script>
</body>

</html>