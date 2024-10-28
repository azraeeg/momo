<?php 
require 'app/component/head.php';
require 'env/koneksi.php';
?>
<body class="rbt-header-sticky">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Start Header Area -->
    <?php require 'app/component/navbar.php'; ?>

<!-- start konten -->

<div class="row justify-content-center">
    <div class="col-sm-12">
        <center>
            disini konten
        </center>
        
    </div>
</div>

<!-- end konten -->
      
    <!-- Start Footer aera -->
    <?php require 'app/component/footer.php'; ?>
    <!-- End Footer aera -->
    <!-- <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> -->

    <!-- JS
============================================ -->
<?php 
    require 'app/component/js.php';
?>