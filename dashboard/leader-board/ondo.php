<?php
require_once('../load.php');
if (!$login->verify_session()) {
    header('Location: ../login.php');
}

$mysqli = new mysqli('167.99.193.7', 'herosuper', '8f19d5cfa468e3cbd3936331f73e1', 'leader_board') or die(mysqli_error($mysqli));


$position = '';
$name = '';
$kmCovered = '';
$longitude = '';
$lat = '';
$update = false;
$id = 0;

if (isset($_POST['save'])) {
    $position = $_POST['position'];
    $name = $_POST['name'];
    $kmCovered = $_POST['km-covered'];
    $longitude = $_POST['longitude'];
    $lat = $_POST['lat'];

    $mysqli->query("INSERT INTO `ondo_rider_list`(position, name, km_covered, longitude, lat) VALUES('$position', '$name', '$kmCovered', '$longitude', '$lat')") or
        die($mysqli->error);

    $_SESSION['message'] = "Record added successfully";
    $_SESSION['msg_type'] = "success";

    header('Location: ondo.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM ondo_rider_list WHERE id=$id") or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Record deleted successfully";
    $_SESSION['msg_type'] = "danger";

    header('Location: ondo.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM `ondo_rider_list` WHERE id=$id") or die(mysqli_error($mysqli));
    if (count(array($result)) == 1) {
        $row = $result->fetch_array();
        $position = $row['position'];
        $name = $row['name'];
        $kmCovered = $row['km_covered'];
        $longitude = $row['longitude'];
        $lat = $row['lat'];
        $update = true;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $position = $_POST['position'];
    $name = $_POST['name'];
    $kmCovered = $_POST['km-covered'];
    $longitude = $_POST['longitude'];
    $kmCovered = $_POST['km-covered'];

    $mysqli->query("UPDATE ondo_rider_list SET position = '$position', name = '$name', km_covered = '$kmCovered', longitude = '$longitude', lat = '$lat'  WHERE id='$id'") or die(mysqli_error($mysqli));

    $_SESSION['message'] = 'Record updated successfully';
    $_SESSION['msg_type'] = 'warning';

    header('Location: ondo.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ondo</title>
</head>

<body>

    <?php
    if (isset($_SESSION['message'])) : ?>

        <div class="alert alert-<?php echo $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif; ?>


    <div class="container">
        <div class="jumbotron">
            <h1 class="sec__info h2"> Update Ondo Leader Board</h1>
        </div>
        <div class="row"><a href="index.php" type="button" class="btn btn-dark">Go Back to LeaderBoard</a></div>
        <br>
        <?php
        $result = $mysqli->query("SELECT * FROM ondo_rider_list") or die($mysqli->error);
        // pre_r($result);
        ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Name</th>
                        <th>KM Covered</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['position'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['km_covered'] ?></td>
                        <td><?php echo $row['longitude'] ?></td>
                        <td><?php echo $row['lat'] ?></td>
                        <td>
                            <a href="ondo.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="ondo.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <?php
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>
        <div class="row justify-content-center">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="name">Position</label>
                    <input type="text" name="position" class="form-control" value="<?php echo $position ?>" placeholder="Enter rider's position">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="Enter rider's name">
                </div>
                <div class="form-group">
                    <label for="location">KM Covered</label>
                    <input type="text" name="km-covered" class="form-control" value="<?php echo $kmCovered ?>" placeholder="Enter KM Covered">
                </div>
                <div class="form-group">
                    <label for="location">Longitude</label>
                    <input type="text" name="longitude" class="form-control" value="<?php echo $longitude ?>" placeholder="Enter the Longitude">
                </div>
                <div class="form-group">
                    <label for="location">Latitude</label>
                    <input type="text" name="lat" class="form-control" value="<?php echo $lat ?>" placeholder="Enter the Latitude">
                </div>
                <?php if ($update == true) : ?>
                    <button type="submit" name="update" class="btn btn-info">UPDATE</button>
                <?php else : ?>
                    <button type="submit" name="save" class="btn btn-primary">SAVE</button>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>