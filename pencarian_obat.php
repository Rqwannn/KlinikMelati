<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/pencarian.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <!-- Font Cadangan -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbarMenu PassScroll">
        <div class="logoMenu">
            <h5 onclick="backToMain()">Healthy</h5>
        </div>

    </div>

    <div class="headerPencarian"> 

    </div> 

    <div class="section container">
        <div class="contentPencarian">
            <div class="content_title d-flex">
                <i class="fa-solid fa-chevron-left" onclick="backToMain()"></i>
                <h1 id="title">Hasil Pencarian</h1>
            </div>

            <div class="w-100 d-flex justify-content-center">
                <div class="wrapperInputType mt-4" id="input_pencarian">
                    <label for="TextHolder">Cari Obat...</label>
                    <input type="text" id="TextHolder">
                    <button type="submit" onclick="searchMedicine()">Cari</button>
                </div>
            </div>

            <div class="content-card mt-5">
                <div class="row wrapperObat">
                    
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleObat">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="bodyObat">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
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
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="JS/TweenMax.min.js"></script>
<script src="JS/config.js"></script>
<script src="JS/FormatMoney.js"></script>
<script src="JS/pencarian.js"></script>
<script src="JS/user.js"></script>
</body>
</html>