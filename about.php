<?php
$pageTitle = "About";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
?>

<div class="section main__section bg-white">
  <div class="container">

    <div class="md:flex items-center md:space-x-10 lg:space-x-0">
      <div class="space-y-8 md:w-6/12 lg:mt-0 mt-10">
        <h1 class="h4" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50">The Biggest Biking Competition in Nigeria</h1>
        <a class="more" href="#">Learn more
          <i class="icon-feather-arrow-right icon"></i>
        </a>
      </div>
      <div class="relative md:w-6/12 transform xl:translate-x-11">
        <img src="assets/images/about-1.png" alt="" class="shadow-1 w-full rounded-2xl" uk-scrollspy="cls: uk-animation-slide-left-medium">
      </div>
    </div>

  </div>
</div>



<div class="section bg-gray-50 xl:mt-0 -mt-32">
  <div class="container">

    <h1 class="sec__info h4 text-center" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Meet the Bikers</h1>
    <!-- <p class="sec__info info text-center"> have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly</p> -->

    <!-- members grid  -->
    <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 text-center lg:text-left md:mt-24 mt-10">
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Kola Tomas</h3>
          <!-- <p> Desinger </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Alex smothin </h3>
          <!-- <p> Manger </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Morgan Guadis </h3>
          <!-- <p> Developer </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> John Senatin </h3>
          <!-- <p> Desinger </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Kola Tomas</h3>
          <!-- <p> Desinger </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Alex smothin </h3>
          <!-- <p> Manger </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> Morgan Guadis </h3>
          <!-- <p> Developer </p> -->
        </div>
      </div>
      <div>
        <img src="./img/biker.jpg" alt="" class="rounded-md shadow-lg transform hover:scale-100 duration-200 hover:-translate-y-2">
        <div class="my-3">
          <h3 class="text-xl font-semibold"> John Senatin </h3>
          <!-- <p> Desinger </p> -->
        </div>
      </div>

    </div>
  </div>
</div>


<?php include __DIR__ . '/templates/footer.html.php' ?>

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