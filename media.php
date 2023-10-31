<?php
require_once('load.php');
// if (!$login->verify_session()) {
//     header('Location: ./login.php');
// }


$pageTitle = "Media";
$logOut = '<li><a href="logout.php"> Logout </a></li>';
include __DIR__ . '/templates/header.html.php';
// include __DIR__ . '/dashboard/media-update/includes/db.php'
?>
<style>
    html {
        box-sizing: border-box;
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
        padding: 0;
        margin: 0;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, San Francisco, Helvetica Neue, Helvetica, Ubuntu, Roboto, Noto, Segoe UI, Arial, sans-serif;
    }

    .hidden {
        display: none;
    }

    svg {
        width: 20px;
        height: 20px;
        margin-right: 7px;
    }

    button,
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: auto;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #777;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        line-height: 1.1;
        letter-spacing: 2px;
        text-transform: capitalize;
        text-decoration: none;
        white-space: nowrap;
        border-radius: 4px;
        border: 1px solid #ddd;
        cursor: pointer;
    }

    button:hover,
    .button:hover {
        border-color: #cdd;
    }

    .share-button,
    .copy-link {
        padding-left: 30px;
        padding-right: 30px;
    }

    .share-button,
    .share-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .share-dialog {
        display: none;
        width: 95%;
        max-width: 500px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, .15);
        z-index: -1;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 4px;
        background-color: #fff;
    }

    .share-dialog.is-open {
        display: block;
        z-index: 2;
    }

    header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .targets {
        display: grid;
        grid-template-rows: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        margin-bottom: 20px;
    }

    .close-button {
        background-color: transparent;
        border: none;
        padding: 0;
    }

    .close-button svg {
        margin-right: 0;
    }

    .link {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        border-radius: 4px;
        background-color: #eee;
    }

    .pen-url {
        margin-right: 15px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
<!-- Carousel -->
<div class="section main__section bg-white">
    <div class="container">

        <h1 class="sec__info h2" uk-scrollspy="cls: uk-animation-slide-bottom-small;delay: 50"> Media </h1>
        <!-- <p class="sec__info info">have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->

        <div class="max-w-5xl mx-auto">

            <div class="relative" uk-slideshow="ratio: 6:3;animation: pull;min-height: 300; max-height: 600">


                <ul class="uk-slideshow-items rounded-2xl">

                    <li>
                        <img src="dashboard/media-update/images/25.jpeg" alt="" class="object-cover w-full h-full inset-0">
                    </li>
                    <li>
                        <img src="dashboard/media-update/images/24.jpeg" alt="" class="object-cover w-full h-full inset-0">
                    </li>
                    <li>
                        <img src="dashboard/media-update/images/23.jpeg" alt="" class="object-cover w-full h-full inset-0">
                    </li>
                    <li>
                        <img src="dashboard/media-update/images/22.jpeg" alt="" class="object-cover w-full h-full inset-0">
                    </li>
                    <li>
                        <img src="dashboard/media-update/images/21.jpeg"" alt="" class=" object-cover w-full h-full inset-0">
                    </li>
                    <li>
                        <img src="dashboard/media-update/images/20.jpeg" alt="" class="object-cover w-full h-full inset-0">
                    </li>
                </ul>


                <a class="absolute bg-white text-3xl text-red-500 hover:bg-red-600 hover:text-white bottom-1/2 transform translate-y-1/2 md:flex items-center justify-center -right-8 rounded-full shadow-md z-10 w-8 h-8 mr-3" href="#" uk-slideshow-item="next"> <i class="icon-feather-arrow-right"></i></a>
                <a class="absolute bg-white text-3xl text-red-500 hover:bg-red-600 hover:text-white bottom-1/2 transform translate-y-1/2 md:flex items-center justify-center -left-8 rounded-full shadow-md z-10 w-8 h-8 ml-3" href="#" uk-slideshow-item="previous"> <i class="icon-feather-arrow-left"></i></a>

                <ul class="uk-slideshow-nav uk-dotnav flex md:hidden mt-10 justify-center"></ul>

                <div class="share-dialog">
                    <header>
                        <h3 class="dialog-title">Share this Image</h3>
                        <button class="close-button"><svg>
                                <use href="#close"></use>
                            </svg></button>
                    </header>

                </div>

                <button class="share-button bg-red-600 text-white" type="button" title="Share this image">
                    <svg>
                        <use href="#share-icon"></use>
                    </svg>
                    <span>Share</span>
                </button>

                <svg class="hidden">
                    <defs>
                        <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" y1="2" x2="12" y2="15"></line>
                        </symbol>

                        <symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </symbol>

                        <symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </symbol>

                        <symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </symbol>

                        <symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </symbol>

                        <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                        </symbol>
                    </defs>
                </svg>

            </div>

        </div>

    </div>

</div>

<!-- Individual Images -->
<script>
    const shareButton = document.querySelector('.share-button');
    const shareDialog = document.querySelector('.share-dialog');
    const closeButton = document.querySelector('.close-button');

    shareButton.addEventListener('click', event => {
        if (navigator.share) {
            navigator.share({
                title: 'Hero Super Oga',
                url: 'https://herosuperoga.com/media.php'
            })
        }
    });
</script>

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