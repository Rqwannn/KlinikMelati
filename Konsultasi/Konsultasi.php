<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Konsultasi.css">
    <title>Konsultasi</title>
</head>

<body>
    <img src="../Img/bgLogin.jpg" class="backgroundLogin" alt="">

    <div class="content">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card-login">

                <div class="row">

                    <div class="card-left position-relative overflow-hidden">

                        <div class="col-md-12">
                            <div class="card-social-media d-flex justify-content-start position-absolute flex-column">
                                <h4 class="card-title text-white mb-4">Spesialis</h4>
                                <span class="text-white mb-4" id="ErrorSpesialis" style="display: none; font-size: 15px;"></span>
                                <div class="spesialis mb-2 d-flex align-items-center badge bg-light position-relative">
                                    <input type="radio" name="dokter" class="DokterUmum" value="Dokter Umum">
                                    <div class="card-title text-dark" style="margin-left: 25px;">Dokter Umum</div>
                                </div>
                                <div class="spesialis d-flex align-items-center mb-2 badge bg-light position-relative">
                                    <input type="radio" name="dokter" class="DokterGigi" value="Dokter Gigi">
                                    <div class="card-title text-dark" style="margin-left: 25px;">Dokter Gigi</div>
                                </div>
                                <div class="spesialis d-flex align-items-center mb-2 badge bg-light position-relative">
                                    <input type="radio" name="dokter" class="DokterAnak" value="Dokter Anak">
                                    <div class="card-title text-dark" style="margin-left: 25px;">Dokter Anak</div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-right d-flex justify-content-center">
                            <i class="fas fa-angle-left text-green"></i>
                        </div>

                    </div>

                    <div class="card-right">
                        <div class="col-md-12">
                            <div class="position-relative">

                                <div class="content-login overflow-hidden">
                                    <div class="header-content">
                                        <h3 class="card-title text-center mt-3 mb-4">Konsultasi</h3>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="AuthEmail" aria-describedby="emailHelp" placeholder="Email Anda" autocomplete="off">
                                                <span class="text-danger" id="ErrorEmail" style="display: none; font-size: 15px;"></span>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                                                <select id="jk" class="form-select">
                                                    <option value="Pilih Gender Anda" selected>Pilih Gender Anda</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <span class="text-danger" id="ErrorGender" style="display: none; font-size: 15px;"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                <input type="text" name="name" class="form-control" id="AuthNama" aria-describedby="emailHelp" placeholder="Nama Anda" autocomplete="off">
                                                <span class="text-danger" id="ErrorNama" style="display: none; font-size: 15px;"></span>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal Temu</label>
                                                <input type="date" name="date" class="form-control" id="AuthDate" placeholder="Tanggal Temu" autocomplete="off">
                                                <span class="text-danger" id="ErrorTanggal" style="display: none; font-size: 15px;"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Umur</label>
                                                <input type="text" name="text" class="form-control" id="AuthUmur" autocomplete="off" placeholder="Umur Anda" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                <span class="text-danger" id="ErrorUmur" style="display: none; font-size: 15px;"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" name="submit" class="btn btn-green text-white" onclick="InsertData()">Kirim</button>
                                            <button type="submit" name="submit" class="btn btn-merah text-white" onclick="BackHome()">Kembali</button>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="../JS/sweetalert2.all.min.js"></script>
            <script src="../JS/Konsultasi.js"></script>
</body>

</html>