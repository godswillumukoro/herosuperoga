<?php
require_once('load.php');
// if (!$login->verify_session()) {
//   header('Location: ./login.php');
// }
$pageTitle = "Leader Board";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
$link = mysqli_connect("167.99.193.7", 'herosuper', '8f19d5cfa468e3cbd3936331f73e1', 'leader_board');
include __DIR__ . '/templates/header.html.php';
?>

<style>
  .close-modal {
    background: none;
    border: none;
    font-size: 1.5rem;
  }

  .modal {
    width: 450px;
    position: fixed;
    top: -50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: top 0.3s ease-in-out;
    border: 1px solid #ccc;
    border-radius: 10px;
    z-index: 2;
    background-color: #fff;
  }

  .modal.active {
    top: 50%;
  }

  .modal .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
    padding: 0.5rem;
    background-color: rgba(0, 0, 0, 0.05);
  }

  .modal .body {
    padding: 0.75rem;
  }

  #overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
  }

  #overlay.active {
    display: block;
  }
</style>

<!-- Leader Board Update Section -->
<div class="section main__section bg-white">
  <div class="container">

    <h1 class="sec__info h2"> Leader Board</h1>
    <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 text-center lg:text-left md:mt-24 mt-10">
      <a data-target="#modal1" id="myBtn">
        <div>

          <img src="./assets/images/leader-board/gombe.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
          <div class="my-3">
            <h3 class="text-xl font-semibold"> Gombe State</h3>

            <!-- <p> Desinger </p> -->
          </div>
        </div>
      </a>
      <a data-target="#modal2" id="myBtn">

        <div>
          <img src="./assets/images/leader-board/oyo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
          <div class="my-3">
            <h3 class="text-xl font-semibold"> Oyo State</h3>
            <!-- <p> Desinger </p> -->
          </div>
        </div>
      </a>
      <a data-target="#modal3" id="myBtn">

        <div>
          <img src="./assets/images/leader-board/ekiti.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
          <div class="my-3">
            <h3 class="text-xl font-semibold"> Ekiti State</h3>
            <!-- <p> Desinger </p> -->
          </div>
        </div>
      </a>
      <a data-target="#modal4" id="myBtn">

        <div>
          <img src="./assets/images/leader-board/ondo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
          <div class="my-3">
            <h3 class="text-xl font-semibold"> Ondo State</h3>
            <!-- <p> Desinger </p> -->
          </div>
        </div>
      </a>
      <a data-target="#modal5" id="myBtn">

        <div>
          <img src="./assets/images/leader-board/ondo.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2 object-cover h-48 w-96">
          <div class="my-3">
            <h3 class="text-xl font-semibold"> Kwara State</h3>
            <!-- <p> Desinger </p> -->
          </div>
        </div>
      </a>

    </div>

    <div class="modal" id="modal1">
      <div id="myModal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <ul class="max-w-sm mx-auto modal-content" id="">

          <?php
          $query = "SELECT * FROM `gombe_rider_list` ORDER BY `position` ASC";
          $result = mysqli_query($link, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) { ?>

              <li id="<?= $row->id; ?>" class="bg-red-200 p-1 rounded-2xl shadow-sm uk-open mx-4 my-3 flex justify-between px-4">
                <!-- <a class=" text-xl font-semibold" href="#"> 1st</a> -->
                <span class=" text-sm text-black"> <?= $row->position . '.'; ?></span>
                <span class=" text-sm text-black"> <?= $row->name; ?></span>
                <span class=" text-sm text-red-700 font-bold"> <?= $row->km_covered . 'KM'; ?><ion-icon name="caret-up-outline"></ion-icon></span>
              </li>
          <?php }
          }
          ?>
        </ul>
      </div>

    </div>
    <div class="modal" id="modal2">
      <div id="myModal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <ul class="max-w-sm mx-auto modal-content" id="">

          <?php
          $query = "SELECT * FROM `oyo_rider_list` ORDER BY `position` ASC";
          $result = mysqli_query($link, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) { ?>

              <li id="<?= $row->id; ?>" class="bg-red-200 p-1 rounded-2xl shadow-sm uk-open mx-4 my-3 flex justify-between px-4">
                <!-- <a class=" text-xl font-semibold" href="#"> 1st</a> -->
                <span class=" text-sm text-black"> <?= $row->position . '.'; ?></span>
                <span class=" text-sm text-black"> <?= $row->name; ?></span>
                <span class=" text-sm text-red-700 font-bold"> <?= $row->km_covered . 'KM'; ?><ion-icon name="caret-up-outline"></ion-icon></span>
              </li>
          <?php }
          }
          ?>
        </ul>
      </div>

    </div>
    <div class="modal" id="modal3">
      <div id="myModal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <ul class="max-w-sm mx-auto modal-content" id="">

          <?php
          $query = "SELECT * FROM `ekiti_rider_list` ORDER BY `position` ASC";
          $result = mysqli_query($link, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) { ?>

              <li id="<?= $row->id; ?>" class="bg-red-200 p-1 rounded-2xl shadow-sm uk-open mx-4 my-3 flex justify-between px-4">
                <!-- <a class=" text-xl font-semibold" href="#"> 1st</a> -->
                <span class=" text-sm text-black"> <?= $row->position . '.'; ?></span>
                <span class=" text-sm text-black"> <?= $row->name; ?></span>
                <span class=" text-sm text-red-700 font-bold"> <?= $row->km_covered . 'KM'; ?><ion-icon name="caret-up-outline"></ion-icon></span>
              </li>
          <?php }
          }
          ?>
        </ul>
      </div>

    </div>
    <div class="modal" id="modal4">
      <div id="myModal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <ul class="max-w-sm mx-auto modal-content" id="">

          <?php
          $query = "SELECT * FROM `ondo_rider_list` ORDER BY `position` ASC";
          $result = mysqli_query($link, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) { ?>

              <li id="<?= $row->id; ?>" class="bg-red-200 p-1 rounded-2xl shadow-sm uk-open mx-4 my-3 flex justify-between px-4">
                <!-- <a class=" text-xl font-semibold" href="#"> 1st</a> -->
                <span class=" text-sm text-black"> <?= $row->position . '.'; ?></span>
                <span class=" text-sm text-black"> <?= $row->name; ?></span>
                <span class=" text-sm text-red-700 font-bold"> <?= $row->km_covered . 'KM'; ?><ion-icon name="caret-up-outline"></ion-icon></span>
              </li>
          <?php }
          }
          ?>
        </ul>
      </div>

    </div>
    <div class="modal" id="modal5">
      <div id="myModal" class="modal">
        <!-- <span class="close">&times;</span> -->
        <ul class="max-w-sm mx-auto modal-content" id="">

          <?php
          $query = "SELECT * FROM `kwara_rider_list` ORDER BY `position` ASC";
          $result = mysqli_query($link, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) { ?>

              <li id="<?= $row->id; ?>" class="bg-red-200 p-1 rounded-2xl shadow-sm uk-open mx-4 my-3 flex justify-between px-4">
                <!-- <a class=" text-xl font-semibold" href="#"> 1st</a> -->
                <span class=" text-sm text-black"> <?= $row->position . '.'; ?></span>
                <span class=" text-sm text-black"> <?= $row->name; ?></span>
                <span class=" text-sm text-red-700 font-bold"> <?= $row->km_covered . 'KM'; ?><ion-icon name="caret-up-outline"></ion-icon></span>
              </li>
          <?php }
          }
          ?>
        </ul>
      </div>

    </div>

    <div id="overlay"></div>


  </div>
</div>



<?php
include __DIR__ . '/templates/footer.html.php';
?>


</body>



<!-- Javascript
    ================================================== -->
<script>
  const btns = document.querySelectorAll("[data-target]");
  const close_modals = document.querySelectorAll(".close-modal");
  const overlay = document.getElementById("overlay");

  btns.forEach((btn) => {
    btn.addEventListener("click", () => {
      document.querySelector(btn.dataset.target).classList.add("active");
      overlay.classList.add("active");
    });
  });

  close_modals.forEach((btn) => {
    btn.addEventListener("click", () => {
      const modal = btn.closest(".modal");
      modal.classList.remove("active");
      overlay.classList.remove("active");
    });
  });

  window.onclick = (event) => {
    if (event.target == overlay) {
      const modals = document.querySelectorAll(".modal");
      modals.forEach((modal) => modal.classList.remove("active"));
      overlay.classList.remove("active");
    }
  };
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>