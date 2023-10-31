<?php
require_once('../load.php');
if (!$login->verify_session()) {
    header('Location: ../login.php');
}

$pageTitle = "Media Update";
include __DIR__ . '/templates/header.html.php';
include 'includes/db.php';

if (isset($_POST['insert'])) {
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/" . $image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO `image` (image_name) VALUES ('$image_name')";

    $result = mysqli_query($conn, $query);

    if ($result == true) {
        header("Location:index.php");
    } else {
        die('error' . mysqli_error($conn));
    }
}
?>

<style>
    .btn_blue:hover {
        color: white;
    }
</style>

<!-- Media Update Section -->
<div class="section main__section bg-white" id="media">
    <div class="container">
        <div class="max-w-5xl mx-auto md:mb-20">

            <h1 class="sec__title h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50">Media Update</h1>

            <div class="view-video bg-red-200 bg-center shadow-1" uk-img>


                <form action="" method="post" enctype="multipart/form-data" class="md:flex font-semibold items-center justify-center md:space-x-6 md:md:mb-14 mb-10 md:space-y-0 space-y-4 absolute inset-x-0 bottom-32 h-16">

                    <div>
                        <input type="file" class="btn btn_blue-light md:w-auto w-full" name="image" class="form-control" placeholder="Enter email">
                    </div>
                    <div>
                        <!-- <input type="button" class="btn btn_blue md:w-auto w-full" value="Insert data" name="insert"> -->
                        <button type="submit" name="insert" class="btn btn_blue md:w-auto w-full">Insert Image</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


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

</html