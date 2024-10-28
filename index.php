<?php 
require 'app/component/head.php';
require 'env/koneksi.php';
?>

<body class="rbt-header-sticky">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Start Header Area -->
    <?php require 'app/component/navbar.php'; ?>
    <!-- Mobile Menu Section -->
    <!-- Start Side Vav -->
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="row justify-content-center">
        <center><img class="img" style=" width: 100%; max-width: auto; height: auto;" src="assets/images/logo/rspm2.jpg">
        </center>
    </div>
    <!-- Start Button Area  -->
    <div class="rbt-video-area bg-color-white rbt-section-gapTop" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="video-popup-wrapper">
                        <img class="w-100 rbt-radius" src="https://img.youtube.com/vi/pvwLdg4CdOE/sddefault.jpg" alt="Video Images">
                        <a class="rbt-btn rounded-player popup-video position-to-top rbtplayer" href="https://youtu.be/pvwLdg4CdOE?feature=shared">
                            <span><i class="feather-play"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_lg--0 pl_md--0 pl_sm--0">
                        <div class="section-title text-start">
                            <h4 class="title">SELAMAT DATANG</h4>
                            <p class="description mt--30">Selamat datang di RS PERMATA MEDIKA Semarang, pusat layanan kesehatan terpercaya yang mengutamakan keselamatan, kenyamanan, dan kualitas perawatan bagi setiap pasien. Dengan tim medis berpengalaman dan fasilitas modern, kami siap melayani Anda dengan sepenuh hati. Terima kasih telah mempercayakan kesehatan Anda kepada kami. Bersama, kita wujudkan hidup sehat dan sejahtera!</p>
                            <p style="text-align: justify;"></p>
                            <div class="rbt-feature-wrapper mt--40">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Button Area  -->
    <!-- Start Advance Tab  -->
    <div class="rbt-advance-tab-area rbt-section-gapTop bg-color-white">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">SAMBUTAN DIREKTUR</h2>
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <img class="img" style=" width: 100%; max-width: 900px; height: auto;" src="assets/images/logo/sekapursirih.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advance Tab  -->
    <!-- Start Our Course Area  -->
    <div class="rbt-course-area rbt-section-gapTop bg-color-white" id="course">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">DOKTER KAMI</h2>
                    </div>
                </div>
            </div>
            <!-- Swiper Container -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Tambahkan lebih banyak slide di sini -->
                    <!-- Start Single Card -->
                    <div class="swiper-slide">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/Foto Dokter/14. Arlis Hasyim.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <a>Spesialis Obsgyn</a>
                                </div>
                                <h4 class="rbt-card-title"><a href="#">dr. Arlis Hasyim Makruf,Sp.OG</a></h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>S1 UGM</li>
                                    <li><i class="feather-book"></i>S2 UGM</li>
                                </ul>
                                <p class="rbt-card-text"></p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater"></div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price"></div>
                                    <a class="rbt-btn-link" href="#">Jadwal Praktek<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card -->
                    <!-- Start Single Card -->
                    <div class="swiper-slide">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/Foto Dokter/2. Bambang wicaksono.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <a>Spesialis Obsgyn</a>
                                </div>
                                <h4 class="rbt-card-title"><a href="#">dr. Bambang Wisaksono,Sp.OG</a></h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>S1 UNDIP</li>
                                    <li><i class="feather-book"></i>S2 UNDIP</li>
                                </ul>
                                <p class="rbt-card-text"></p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater"></div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price"></div>
                                    <a class="rbt-btn-link" href="#">Jadwal Praktek<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card -->
                    <!-- Start Single Card -->
                    <div class="swiper-slide">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/course/course-list-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <a>Spesialis Obsgyn</a>
                                </div>
                                <h4 class="rbt-card-title"><a href="#">dr. Vannya Dewi Puspitasari,Sp.OG</a></h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>S1 UNDIP</li>
                                    <li><i class="feather-book"></i>S2 UNDIP</li>
                                </ul>
                                <p class="rbt-card-text"></p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater"></div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price"></div>
                                    <a class="rbt-btn-link" href="#">Jadwal Praktek<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card -->
                    <!-- Start Single Card -->
                    <div class="swiper-slide">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/Foto Dokter/4. Ahmad Bukhoeri.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <a>Spesialis Obsgyn</a>
                                </div>
                                <h4 class="rbt-card-title"><a href="#">dr. Ahmad Bukhoeri,Sp.OG</a></h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>S1 UNDIP</li>
                                    <li><i class="feather-book"></i>S2 UNDIP</li>
                                </ul>
                                <p class="rbt-card-text"></p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater"></div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price"></div>
                                    <a class="rbt-btn-link" href="#">Jadwal Praktek<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card -->
                    <!-- Start Single Card -->
                    <div class="swiper-slide">
                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="assets/images/Foto Dokter/15. Hanif Reza.png" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <div class="rbt-card-top">
                                    <a>Spesialis Obsgyn</a>
                                </div>
                                <h4 class="rbt-card-title"><a href="#">dr. Hanif Reza,Sp.OG</a></h4>
                                <ul class="rbt-meta">
                                    <li><i class="feather-book"></i>S1 UNISULA</li>
                                    <li><i class="feather-book"></i>S2 UGM</li>
                                </ul>
                                <p class="rbt-card-text"></p>
                                <div class="rbt-author-meta mb--10">
                                    <div class="rbt-avater"></div>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price"></div>
                                    <a class="rbt-btn-link" href="#">Jadwal Praktek<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card -->
                </div>
                <!-- Add Pagination -->
                <!-- Add Navigation -->
                <div class="swiper-button-next custom-button-next"></div>
                <div class="swiper-button-prev custom-button-prev"></div>
            </div>
            <!-- End Swiper Container -->
        </div>
    </div>
    <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.custom-button-next',
            prevEl: '.custom-button-prev',
        },
        pagination: {
            el: '.custom-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
        },
    });
    </script>
    <!-- End Our Course Area  -->
    <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden" id="testimonial">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">POLIKLINIK</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center row--30">
                <div class="col-lg-6">
                    <!-- Start Tab Content  -->
                    <div class="rbt-testimonial-content tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="testimonial-tab1" role="tabpanel" aria-labelledby="testimonial-tab1-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik kandungan dan kebidanan juga sering disebut sebagai Obstetri dan Ginekolog (Obsgyn). Poliklinik kandungan dan kebidanan berfokus pada segala sesuatu yang berkaitan dengan kesehatan reproduksi wanita dan juga pada penanganan proses kehamilan pada seorang ibu hingga proses persalinan,termasuk juga penyakit yang berhubungan dengan kandungan/ kebidanan.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis</span> Obsgyn.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab2" role="tabpanel" aria-labelledby="testimonial-tab2-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Anak merupakan klinik yang ditangani oleh dokter spesialis anak meliputi kesehatan fisik, mental, dan emosional anak usia 0-18 tahun.
                                    Dokter Spesialis Anak bertugas untuk memberikan tindakan pencegahan penyakit pada bayi, anak, dan remaja yang sehat, serta memberikan pengobatan pada anak yang sakit, baik akut maupun kronis.
                                    Tak hanya itu, dokter spesialis anak juga memiliki peran dalam mendiagnosis dan mengevaluasi tumbuh kembang anak.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis</span> Anak.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab3" role="tabpanel" aria-labelledby="testimonial-tab3-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Bedah Mulut kami menyediakan berbagai layanan yang fokus pada perawatan, diagnosis, dan penanganan masalah di area mulut, rahang, dan wajah.
                                    Dengan tim ahli bedah mulut yang berpengalaman, kami menangani prosedur seperti pencabutan gigi bungsu yang impaksi, perawatan infeksi mulut, operasi kista atau tumor di rongga mulut, hingga perbaikan kelainan rahang.
                                    Selain itu, kami juga melakukan bedah rekonstruksi untuk trauma wajah serta penanganan masalah sendi rahang (TMJ).
                                    Dengan peralatan modern dan standar keamanan tinggi, kami memastikan setiap prosedur dilakukan secara efektif dan aman untuk kenyamanan pasien.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis</span> Bedah Mulut.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab4" role="tabpanel" aria-labelledby="testimonial-tab4-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Gigi kami menawarkan layanan perawatan kesehatan gigi dan mulut yang komprehensif, mulai dari pencegahan hingga perawatan lanjutan.
                                    Tim spesialis kami mencakup berbagai bidang, seperti ortodonti (kawat gigi), periodonti (penyakit gusi), endodonti (perawatan saluran akar), prostodonti (gigi tiruan), dan bedah gigi.
                                    Dengan teknologi mutakhir dan pendekatan personal, kami menangani berbagai masalah gigi seperti gigi berlubang, penyakit gusi, maloklusi, hingga rehabilitasi gigi akibat kerusakan atau trauma.
                                    Kami juga menyediakan layanan estetika seperti pemutihan gigi dan veneer untuk mendukung kesehatan mulut sekaligus meningkatkan penampilan senyum Anda.
                                    Di klinik kami, kesehatan gigi Anda menjadi prioritas utama.</p>
                            </div>
                            <div>
                                <h6><span>Klinik Spesialis </span> Gigi.</h6>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab5" role="tabpanel" aria-labelledby="testimonial-tab5-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Jantung kami berfokus pada diagnosis, pencegahan, dan pengobatan penyakit jantung serta sistem kardiovaskular.
                                    Didukung oleh tim dokter ahli jantung yang berpengalaman dan teknologi medis canggih, kami menyediakan berbagai layanan mulai dari pemeriksaan rutin kesehatan jantung, seperti elektrokardiogram (EKG) dan echocardiogram, hingga tindakan intervensi seperti kateterisasi jantung, angioplasti, dan pemasangan ring (stent).
                                    Kami juga menangani penyakit jantung koroner, aritmia, hipertensi, gagal jantung, dan gangguan kardiovaskular lainnya.
                                    Dengan pendekatan yang menyeluruh dan personal, klinik kami berkomitmen memberikan perawatan yang optimal untuk menjaga kesehatan jantung Anda.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis </span> Jantung.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab6" role="tabpanel" aria-labelledby="testimonial-tab6-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Jiwa kami menyediakan layanan profesional untuk menangani masalah kesehatan mental, seperti gangguan kecemasan, depresi, bipolar, skizofrenia, serta masalah emosional dan perilaku lainnya.
                                    Dengan tim psikiater berpengalaman, kami menawarkan diagnosis, terapi obat, dan konseling psikologis, disertai pendekatan holistik untuk membantu pasien mencapai keseimbangan mental dan kualitas hidup yang lebih baik.
                                    Kami berkomitmen untuk memberikan perawatan yang aman, penuh empati, dan disesuaikan dengan kebutuhan setiap individu.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis</span> Jiwa.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab7" role="tabpanel" aria-labelledby="testimonial-tab7-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Kulit dan Kelamin kami menyediakan layanan diagnosis dan pengobatan berbagai masalah kulit, rambut, kuku, serta penyakit menular seksual. Dengan tim dermatolog dan spesialis kelamin berpengalaman, kami menangani kondisi seperti jerawat, eksim, psoriasis, infeksi kulit, hingga masalah seperti herpes, sifilis, dan HIV. Kami menggunakan teknologi terkini dan pendekatan individual untuk memastikan perawatan yang efektif dan aman bagi setiap pasien.</p>
                            </div>
                            <div class="author-info">
                                <h3><span>Klinik Spesialis </span> Kulit dan Kelamin.</h3>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab8" role="tabpanel" aria-labelledby="testimonial-tab8-tab">
                            <div class="inner">
                                <div class="rating mb--30">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <p>Klinik Spesialis Mata kami menyediakan layanan diagnosis, perawatan, dan pengobatan berbagai gangguan penglihatan dan penyakit mata. Dengan tim dokter mata berpengalaman dan teknologi modern, kami menangani kondisi seperti katarak, glaukoma, mata minus, silinder, hingga infeksi dan cedera mata. Kami juga menawarkan tindakan bedah mata dan konsultasi kesehatan mata secara menyeluruh untuk menjaga penglihatan yang optimal dan kualitas hidup yang lebih baik bagi setiap pasien.</p>
                            </div>
                            <div>
                                <h3><span>Klinik Spesialis</span> Mata.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content  -->
                </div>
                <div class="col-lg-6 mt_md--30 mt_sm--30">
                    <!-- Start Tab Nav  -->
                    <ul class="testimonial-thumb-wrapper nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class="active" id="testimonial-tab1-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab1" role="tab" aria-controls="testimonial-tab1" aria-selected="true">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/obgyn.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab2-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab2" role="tab" aria-controls="testimonial-tab2" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/anak.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab3-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab3" role="tab" aria-controls="testimonial-tab3" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/bedahmulut.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab4-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab4" role="tab" aria-controls="testimonial-tab4" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/gigi.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab5-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab5" role="tab" aria-controls="testimonial-tab5" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/jantung.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab6-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab6" role="tab" aria-controls="testimonial-tab6" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/jiwa.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab7-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab7" role="tab" aria-controls="testimonial-tab7" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/kulit.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="testimonial-tab8-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab8" role="tab" aria-controls="testimonial-tab8" aria-selected="false">
                                <div class="testimonial-thumbnai">
                                    <div class="thumb">
                                        <img src="assets/images/poliklinik/mata.png" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Tab Content  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start Event Area  -->
    <div class="rbt-event-area bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">BERITA</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a>
                                <img src="assets/images/logo/rspu1.jpg" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-calendar"></i>17 september, 2024</li>
                                <li><i class="feather-map-pin"></i>Grobogan</li>
                            </ul>
                            <h4 class="rbt-card-title"><a>Pembukaan RS Baru</a></h4>
                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="beritarspu.php">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">lihat artikel</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a>
                                <img src="assets/images/logo/loker2.jpg" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Semarang</li>
                                <!-- <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li> -->
                            </ul>
                            <h4 class="rbt-card-title"><a>Penerimaan Karyawan RS Baru</a></h4>
                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="beritaloker.php">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">lihat artikel</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
            </div>
        </div>
    </div>
    <!-- End Event Area  -->
    <div class="rbt-brand-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-3">
                    <div class="brand-content-left">
                        <h4 class="mb--0">PARTNER ASURANSI</h4>
                    </div>
                </div>
                <div class="col-lg-9">
                    <ul class="brand-list brand-style-2 justify-content-center justify-content-lg-between">
                        <li><a href="#"><img src="" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="" alt="Brand Image"></a></li>
                        <li><a href="#"><img src="" alt="Brand Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
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