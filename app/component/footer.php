<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="#">
                                    <img src="assets/images/logo/logo.png" alt="logo rspm">
                                </a>
                            </div>
                            <p class="description mt--20">RS PERMATA MEDIKA Semarang merupakan salah satu amal usaha milik PT PERMATA PANCA UTAMA, yang memiliki tugas memberikan pelayanan kesehatan yang prima dan profesional sesuai dengan kaidah ilmu kedokteran dan teknologi modern dengan tidak meninggalkan fungsi sosial dan ekonomi.
                            </p>
                            <ul class="social-icon social-default justify-content-start">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/rs_permatamedika?igsh=MTJzeTNzZ2k4OHpxYw== "><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://youtube.com/@rspmsemarang1099?si=lHGFM55PRfdurDbX "><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                            <div class="contact-btn mt--30">
                                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="https://api.whatsapp.com/send/?phone=%2B6281361905757&text&type=phone_number&app_absent=0">
                                    <div class="icon-reverse-wrapper">
                                        <span class="btn-text">Contact With Us</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Berita Terbaru</h5>
                            <ul class="ft-link">
                                <?php 
                                    $ambil = $koneksi->query("SELECT * FROM berita");
                                    while ($data = mysqli_fetch_assoc($ambil)) { ?>
                                       <li>
                                        <a href="<?=$data['link']?>"><?=$data['nama_berita']?></a>
                                    </li>
                                <?php } ?>
                               
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Akreditasi PARIPURNA</h5>
                            <img style=" width: 100%; max-width: 100%; height: auto; object-fit: cover;" src="assets/images/logo/paripurna.png" alt="larsi paripurna">
                            <ul class="ft-link">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Kontak Kami</h5>
                            <ul class="ft-link">
                                <li><span>Phone:</span> <a href="#">(024)7625005</a></li>
                                <li><span>E-mail:</span> <a href="#">rspm.smg@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-style-1 ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        <p class="rbt-link-hover text-center text-lg-start">Copyright © 2024 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>