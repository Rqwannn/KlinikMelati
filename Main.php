<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melati Home-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <!-- Font Cadangan -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="navbarMenu">
        <div class="logoMenu">
            <h5>Healthy</h5>
        </div>

        <div class="linkMenu">
            <i class="fa-solid fa-bars" onclick="openMenu()"></i>

            <ul>
                <li><a href="#TentangNav" class="tentangBtn page-scroll">Tentang</a></li>
                <li><a href="#FasilitasNav" class="page-scroll">Fasilitas</a></li>
                <li><a href="#DokterNav" class="page-scroll">Dokter</a></li>
                <li><a href="#KlinikNav" class="page-scroll">Klinik</a></li>
                <li><a href="#footer">Kontak</a></li>
            </ul>
        </div>

    </div>

    <div class="linkMenuMobile mobile">
        <ul>
            <div class="closeMenu" onclick="closeMenu()">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <li><a href="#TentangNav" class="tentangBtn page-scroll">Tentang</a></li>
            <li><a href="#FasilitasNav" class="page-scroll">Fasilitas</a></li>
            <li><a href="#DokterNav" class="page-scroll">Dokter</a></li>
            <li><a href="#KlinikNav" class="page-scroll">Klinik</a></li>
            <li><a href="#footer">Kontak</a></li>
        </ul>
    </div>

    <div class="container">
        <dic class="row">
            <div class="col-sm-12 col-md-12 mobile">
                <div class="rightSideHeader">
                    <div class="cardVidio">
                        <video autoplay loop muted plays-inline id="Vidio">
                            <source src="img/maldive.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="leftSideHeader">
                    <h1 class="fw-bold">Perawatan Medis Online</h1>
                    <h5>Dapatkan diagnosis, rencana perawatan, dan resep dari penyedia asli perawatan medis berkualitas.</h5>
                    <div class="wrapperInputType mt-4">
                        <label for="TextHolder">Cari Dokter Atau Obat</label>
                        <input type="text" id="TextHolder">
                        <button type="submit">Cari</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 dekstop">
                <div class="rightSideHeader">
                    <div class="cardVidio">
                        <video autoplay loop muted plays-inline id="Vidio">
                            <source src="img/maldive.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section container" style="overflow-x:hidden;">
        <div id="TentangNav">
            <div class="row">
                <div class="col-lg-6 dekstop">
                    <div class="leftSectionTwo mb-3">
                        <div class="CircleOutSide">
                            <div class="imgOutSide">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-sm-6 col-lg-6 modify-section-two">
                    <div class="rightSectionTwo">
                        <h3 class="animasi-x">Kunjungi kami kapan saja untuk diagnosa dan perawatan dengan klinik online 24/7 kami.</h3>
                        <div class="contentSectionTwo mt-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="wrapperImpostanContent mb-3">
                                        <h2 class="animasi-x">+200</h2>
                                        <h4 class="mb-4 animasi-x">Klink</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="wrapperImpostanContent mb-3">
                                        <h2 class="animasi-x">+30</h2>
                                        <h4 class="mb-4 animasi-x">Dokter</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 disable-in-mobile">
                                    <div class="wrapperImpostan-FlexThree mb-3">
                                        <h1 class="animasi-x">24</h1>
                                        <h4 class="mb-4 animasi-x">Jam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footerSectionTwo mt-4">
                            <h5 class="animasi-x">Hemat waktu dan uang. Terima perawatan berkualitas, setiap saat</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section container">
        <div id="FasilitasNav" class="WrapperSectionThree">

            <div class="RightSectionThree mobile">
                <div class="wrapperRightSectionThree">
                    <i class="fab fa-creative-commons-sampling-plus animasi-x"></i>
                    <h1 class="animasi-x transisi-delay-1">Fasilitas Kami</h1>
                </div>
            </div>

            <div class="LeftSectionThree">
                <div class="LeftSectionThree2 owl-carousel owl-theme">
                    <div class="cardFasilitas">
                        <div class="imgTopFasilitas">
                            <img src="img/DokterOperasi.jpg" alt="">
                        </div>
                        <div class="contentFasilitas my-4">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="footerFasilitas d-flex justify-content-end">
                            <button type="submit" class="btn btn-Fasilitas">Lihat Detail</button>
                        </div>
                    </div>

                    <div class="cardFasilitas">
                        <div class="imgTopFasilitas">
                            <img src="img/DokterOperasi.jpg" alt="">
                        </div>
                        <div class="contentFasilitas my-4">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="footerFasilitas d-flex justify-content-end">
                            <button type="submit" class="btn btn-Fasilitas">Lihat Detail</button>
                        </div>
                    </div>

                    <div class="cardFasilitas">
                        <div class="imgTopFasilitas">
                            <img src="img/DokterOperasi.jpg" alt="">
                        </div>
                        <div class="contentFasilitas my-4">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="footerFasilitas d-flex justify-content-end">
                            <button type="submit" class="btn btn-Fasilitas">Lihat Detail</button>
                        </div>
                    </div>

                    <div class="cardFasilitas">
                        <div class="imgTopFasilitas">
                            <img src="img/DokterOperasi.jpg" alt="">
                        </div>
                        <div class="contentFasilitas my-4">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="footerFasilitas d-flex justify-content-end">
                            <button type="submit" class="btn btn-Fasilitas">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="RightSectionThree dekstop">
                <div class="wrapperRightSectionThree">
                    <i class="fab fa-creative-commons-sampling-plus animasi-x mb-4"></i>
                    <h1 class="animasi-x transisi-delay-1">Fasilitas Kami</h1>
                </div>
            </div>

        </div>

    </div>

    <div class="section" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <div class="LeftSectionFour">
                    <div class="iconKimia">
                        <i class="fas fa-prescription-bottle-alt"></i>
                    </div>
                    <div class="iconHati">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="iconMedkit">
                        <i class="fas fa-briefcase-medical"></i>
                    </div>
                    <div class="iconOrang">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="iconDetakJantung">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="iconSuntikan">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <div class="iconVirus">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="RightSectionFour">
                    <h4 class="animasi-x">Para dokter di Online Clinic semuanya terdaftar di dewan medis umum.</h4>
                    <p class="animasi-x mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="slideDownSectionFour mt-4">
                        <div class="WrapperSlideDown">
                            <div class="d-flex Slide-1" data-id="Slide-1">
                                <p class="activeSlideFasilitas">Dentist</p>
                                <p class="activeSlideFasilitas">Pediatric</p>
                                <p class="activeSlideFasilitas">CardioLogy</p>
                            </div>
                            <div class="d-flex Slide-2" data-id="Slide-2">
                                <p>Reumatologi</p>
                                <p>Andrologi</p>
                                <p>Ortodonsia</p>
                            </div>
                            <div class="d-flex Slide-3" data-id="Slide-3">
                                <p>Othopaedi</p>
                                <p>Traumatologi</p>
                                <p>Anestesiology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div id="DokterNav" class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="headerSectionFive">
                        <h1>Dokter</h1>
                    </div>
                    <div class="contentSectionFive mt-4">
                        <ul>
                            <li class="getByOne activeBgDokter">All</li>
                            <li class="getByOne">Orthopedic</li>
                            <li class="getByOne">Nutritionist</li>
                            <li class="getByOne">Pediatric</li>
                            <li class="getByOne">Anaesthestic</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row WrapperDokter">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cardSectionSix">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8">
                                    <h1 class="animasi-minus-x">Siap Memulai ?</h1>
                                    <h5 class="animasi-minus-x transisi-delay-1 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h5>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 btnSectionSix">
                                    <div class="btnSectionSix animasi-x">
                                        <button type="submit" class="btn" onclick="setURL()">Buat Janji Sekarang !</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div id="KlinikNav" class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="headerSectionSeven">
                        <h1 class="animasi-minus-x">Klinik Kami</h1>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 gmaps mobile">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.067793191584!2d106.86552531402899!3d-6.38525229537973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb78d64a7757%3A0x1dd149b26e567ffd!2sPekapuran%20Clinic!5e0!3m2!1sen!2sid!4v1614429435953!5m2!1sen!2sid" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    
                    <div class="contentSectionSeven mt-5">

                    <div class="row">
                        <div class="ValueKlinik col-sm-6 col-md-6 col-lg-12 mb-5">
                            <h5 class="animasi-minus-x mb-3">Klinik Pusat</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-phone-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">+123 456 7891</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-envelope animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Hello@Titan.com</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="flexFaviable d-flex align-items-center mt-4">
                                        <i class="fas fa-map-marker-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Jalan Lorem Ipsum Block G - Perum Curug</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ValueKlinik col-sm-6 col-md-6 col-lg-12 mb-5">
                            <h5 class="mb-3 animasi-minus-x">Klinik Gigi</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-phone-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">+123 456 7891</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-envelope animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Hello@Titan.com</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="flexFaviable d-flex align-items-center mt-4">
                                        <i class="fas fa-map-marker-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Jalan Lorem Ipsum Block G - Perum Curug</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ValueKlinik col-sm-6 col-md-6 col-lg-12 mb-5">
                            <h5 class="mb-3 animasi-minus-x">Perawatan Ibu Dan Bayi</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-phone-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">+123 456 7891</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-envelope animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Hello@Titan.com</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="flexFaviable d-flex align-items-center mt-4">
                                        <i class="fas fa-map-marker-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Jalan Lorem Ipsum Block G - Perum Curug</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ValueKlinik col-sm-6 col-md-6 col-lg-12 mb-5">
                            <h5 class="mb-3 animasi-minus-x">Klinik Orthopedic</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-phone-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">+123 456 7891</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="flexFaviable d-flex align-items-center">
                                        <i class="fas fa-envelope animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Hello@Titan.com</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="flexFaviable d-flex align-items-center mt-4">
                                        <i class="fas fa-map-marker-alt animasi-minus-x"></i>
                                        <div class="animasi-minus-x">Jalan Lorem Ipsum Block G - Perum Curug</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>

                <div class="col-md-6 dekstop">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.067793191584!2d106.86552531402899!3d-6.38525229537973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb78d64a7757%3A0x1dd149b26e567ffd!2sPekapuran%20Clinic!5e0!3m2!1sen!2sid!4v1614429435953!5m2!1sen!2sid" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div id="footer" class="footer">
            <div class="container">
                <div class="row d-flex flex-column">

                    <h1>Clinic Melati</h1>

                    <div class="info-restaurant-footer d-flex justify-content-center">
                        <h5>Jakarta, Indonesia</h5>
                        <h5 style="margin: 0 10px;">|</h5>
                        <h5>+123 456 7891</h5>
                        <h5 style="margin: 0 10px;">|</h5>
                        <h5>Hello@Titan.com</h5>
                    </div>
                    <div class="wrapper-footer d-flex justify-content-center mt-3">
                        <div class="wrapper-icon">
                            <div class="icon"><i class="fab fa-facebook-f"></i></div>
                            <label>Facebook</label>
                        </div>
                        <div class="wrapper-icon">
                            <div class="icon"><i class="fab fa-twitter"></i></div>
                            <label>Twitter</label>
                        </div>
                        <div class="wrapper-icon">
                            <div class="icon"><i class="fab fa-instagram"></i></div>
                            <label>Instagram</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="LinkCircleUp">
        <div class="WrapperCircleUp">
            <i class="fas fa-angle-up"></i>
        </div>
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="JS/TweenMax.min.js"></script>
    <!-- <script src="JS/skrollr.js"></script> -->
    <script src="JS/owl.carousel.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script type="text/javascript">
        
    </script>
    <script src="JS/User.js"></script>
</body>

</html>