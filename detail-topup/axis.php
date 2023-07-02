<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Moblie Legend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>

<body style="background-color: #161619;color:white">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand me-4 px-4 text-white fw-bold fs-3 text-uppercase link-danger" href="#">Brado Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-4 text-white link-danger" href="../index.php"><i class="fa fa-home me-1" aria-hidden="true"></i> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 text-white link-danger" href="../topup.php"><i class="fa fa-shopping-bag  me-1" aria-hidden="true"></i> Top Up </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 text-white link-danger" href="../histori.php"><i class="fa fa-ticket  me-1" aria-hidden="true"></i> Histori </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 text-white link-danger" href="../contact.php"><i class="fa fa-comment  me-1" aria-hidden="true"></i> Contact Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 text-white link-danger" href="#"><i class="fa fa-user-circle-o  me-1" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-relative" style="background-image: url('../img/bgaxis.jpg');width:100%;background-size:100% 100%;height:400px; margin-bottom: -120px;"></div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <img src="../img/logoaxis.jpg" class="rounded-circle border-white border" style="width: 100px;height:100px;margin:0 0 20px 0px">
                <h4 class="fw-bold">AXIS OWSEM</h4>
                <hr class="w-75">
                <p class="mb-4">Bagikan item Ini</p>
                <i class="fa fa-facebook fs-1 me-4"></i>
                <i class="fa fa-twitter fs-1"></i>
                <p class="fw-bold my-4">Voucher Permainan Lainnya</P>

                <a href="./genshin.php" class="text-decoration-none text-white">
                    <div class="d-flex bg-dark shadow p-2 w-75">
                        <img src="../img/logogenshin.jpg" class="rounded-circle me-2" style="width: 60px;height:60px;margin-left:5%">
                        <h6 class="m-3">Genshin Impact</h6>
                    </div>
                </a>
                <a href="./valo.php" class="text-decoration-none text-white">
                    <div class="d-flex bg-dark shadow p-2 w-75 my-4">
                        <img src="../img/logovalo.png" class="rounded-circle me-2" style="width: 60px;height:60px;margin-left:5%">
                        <h6 class="m-3">Valorant</h6>
                    </div>
                </a>
                <a href="./ml.php" class="text-decoration-none text-white">
                    <div class="d-flex bg-dark shadow p-2 w-75">
                        <img src="../img/logoml.jpg" class="rounded-circle me-2" style="width: 60px;height:60px;margin-left:5%">
                        <h6 class="m-3">Mobile Legends</h6>
                    </div>
                </a>
            </div>

            <div class="col-md-7">
                <form method="POST" action="./datatopup.php" class="bg-dark shadow" style="padding: 40px;">
                    <input type="hidden" name="act" value="store">
                    <h4 class="mb-4">Masukan Nomor Telepon Anda</h4>
                    <div class="d-flex my-4">
                        <input type="text" name="gameid" placeholder="Silahkan Masukan Nomor Telp anda" class="form-control w-100 me-4 p-2">
                        <input type="text" name="zoneid" placeholder="Zone ID" class="form-control w-25">
                    </div>
                    <h4 class="my-4">Pilih Pesanan Yang Ingin Anda beli</h4>
                    <div class="form-check my-4 text-center">
                        <span class="btn btn-dark fs-6 fw-bold me-4 border border-white w-25" onclick="harga('40000')"><input type="radio" class="form-check-input ms-4 mt-1" value="OWSEM UNLIMITED" name="pesanan" id="flexRadioDefault1" style="margin-left: 10px;">OWSEM UNLIMITED</span>

                        <span class="btn btn-dark fs-6 fw-bold me-4 border border-white  w-25" onclick="harga('8500')"><input type="radio" class="form-check-input mt-1" value="OWSEM HARIAN" name="pesanan" id="flexRadioDefault1" style="margin-left: 10px;">OWSEM HARIAN</span>

                        <span class="btn btn-dark fs-6 fw-bold me-4 border border-white  w-25" onclick="harga('50000')"><input type="radio" class="form-check-input mt-1" value="OWSEM BULANAN" name="pesanan" id="flexRadioDefault1" style="margin-left: 10px;">OWSEM BULANAN</span>

                        <span class="btn btn-dark fs-6 fw-bold me-4 border border-white  w-25 mt-4" onclick="harga('20000')"><input type="radio" class="form-check-input mt-1" value="OWSEM MINGGUAN" name="pesanan" id="flexRadioDefault1" style="margin-left: 10px;">OWSEM MINGGUAN</span>
                    </div>
                    <h4 class="my-4">Pilih Metode Pembayaran</h4>
                    <div id="pembayaran">
                        <button type="button" class="btn btn-transparent d-flex shadow w-100 border-white border ms-1 my-4 p-2 text-decoration-none text-white" onclick="promo()">
                            <i class="fa fa-ticket m-2 me-3 fs-3"></i>
                            <h5 class="mt-2 ">Gunakan Kode Promo</h5>
                        </button>
                        <div class="d-flex">
                            <span class="btn w-50 bg-black nav-link d-flex me-4 mb-4" id="pay1" name="">
                                <img src="../img/gopay.jpg" class="" style="width: 40%; height:100px;margin-left:-100" alt="">
                                <div>
                                    <input type="text" class="form-control w-75 ms-2 my-2 bg-white" placeholder="" id="harga1" name="harga" class="harga1" readonly>
                                    <button type="submit" class="btn btn-danger" style="width:120px;margin-right:20px;" id="beli1">Beli</button>
                                </div>
                            </span>

                            <span class="btn w-50 bg-black nav-link d-flex ms-2 mb-4" id="pay2">
                                <img src="../img/ovo.jpg" class="" style="width: 40%; height:100px;margin-left:-100" alt="">
                                <div>
                                    <input type="text" class="form-control w-75 ms-2 my-2 bg-white" placeholder="" id="harga2" name="harga" class="harga2" readonly>
                                    <button type="submit" class="btn btn-danger" style="width:100px;margin-right:20px;" id="beli2">Beli</button>
                                </div>
                            </span>
                        </div>
                        <div class="d-flex">
                            <span class="btn w-50 bg-black nav-link d-flex me-4 mb-4" id="pay3">
                                <img src="../img/shoppepay.jpg" class="" style="width: 40%; height:100px;margin-left:-100" alt="">
                                <div>
                                    <input type="text" class="form-control w-75 ms-2 my-2 bg-white" placeholder="" id="harga3" name="harga" class="harga3" readonly>
                                    <button type="submit" class="btn btn-danger" style="width:100px;margin-right:30px;" id="beli3">Beli</button>
                                </div>
                            </span>

                            <span class="btn w-50 bg-black nav-link d-flex ms-4 mb-4" id="pay4">
                                <img src="../img/dana.jpg" class="" style="width: 40%; height:100px;margin-left:-100" alt="">
                                <div>
                                    <input type="text" class="form-control w-75 ms-2 my-2 bg-white" placeholder="" id="harga4" name="harga" class="harga4" readonly>
                                    <button type="submit" class="btn btn-danger" style="width:100px;margin-right:30px;" id="beli4">Beli</button>
                                </div>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-3 text-center" id="judulModal">Kode Promo</h1>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group my-4">
                        <input type="text" class="form-control w-75 p-3" placeholder="Masukan Kode Anda" aria-label="Masukan Kode Anda" aria-describedby="button-addon2" id="kode">
                        <button type="submit" class="btn btn-dark border-white border" id="hitung">Apply</button>
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="text" class="form-control" readonly id="harga" placeholder="">
                        </div>
                        <div class="my-3 ms-4">
                            <label for="exampleFormControlInput1" class="form-label">Diskon</label>
                            <input type="text" class="form-control" readonly id="diskon" placeholder="">
                        </div>
                        <p class="m-4">Total</p>
                        <div id="hasil" class="mt-2 p-4 w-50 border"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="input-group my-4">
                        <input type="text" class="form-control w-75 p-3" value="DGPOIN" readonly placeholder="Masukan Kode Anda" aria-label="Masukan Kode Anda" aria-describedby="button-addon2">
                        <button type="submit" class="btn btn-dark border-white border" type="button" id="gunakan-btn" onclick="gunakan('DGPOIN','30')">Gunakan</button>
                        <div class="col">
                            <h5 class="mt-3">DISKON 30%</h5>
                        </div>
                        <p class="me-3 mt-3">Periode promo :</p>
                        <p class="fw-bold mt-3">03 Jul 2023 - 03 Aug 2023</p>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control w-75 p-3" value="DGVOUCHER" readonly placeholder="Masukan Kode Anda" aria-label="Masukan Kode Anda" aria-describedby="button-addon2">
                        <button type="submit" class="btn btn-dark border-white border" type="button" id="gunakan-btn" onclick="gunakan('DGVOUCHER','10')">Gunakan</button>
                        <div class="col">
                            <h5 class="mt-3">DISKON 10%</h5>
                        </div>
                        <p class="me-3 mt-3">Periode promo :</p>
                        <p class="fw-bold mt-3">23 Jun 2023 - 15 Jul 2023</p>
                    </div>
                </div>
                <button type="button" type="submit" class="btn btn-danger" id="book">Bayar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="total(tx)">Close</button>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-5 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-danger text-decoration-none text-white">
                    <h3>Brado Shop</h3>
                </a>
                <p class="text-white">&copy;2023</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h6>Menu</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Top Up</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Voucher</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Contact Us</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h6>Follow Us</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Tiktok</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Youtube</a></li>
                </ul>
            </div>

            <div class="col-mb-3">
                <form>
                    <h6 class="mb-4">Subscribe to our newsletter</h6>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-danger" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </footer>
    </div>

    <script src="../jquery-3.7.0.min.js"></script>
    <script>
        function promo() {
            $("#modalForm").modal("show");
        }
        $("#hitung").click(function() {
            let H = $("#harga").val();
            let D = $("#diskon").val();
            H = isNaN(H) ? 0 : H
            D = isNaN(D)? 0 : D
            let LU = H * D / 100;
    
            let tx = LU;

            $("#hasil").html(tx);
        });

        function gunakan(kode, diskon) {
            $("#kode").val(kode);
            $("#kode").val(kode);
            $("#diskon").val(diskon);
        }

        $(function() {
            $("#pembayaran").hide();
            $("#beli1").hide();
            $("#beli2").hide();
            $("#beli3").hide();
            $("#beli4").hide();

            $("span").click(function() {
                $("#pembayaran").show();
            });
            $("#pay1").click(function() {
                $("#beli1").show();
                $("#beli2").hide();
                $("#beli3").hide();
                $("#beli4").hide();
            });
            $("#pay2").click(function() {
                $("#beli2").show();
                $("#beli1").hide();
                $("#beli3").hide();
                $("#beli4").hide();
            });
            $("#pay3").click(function() {
                $("#beli3").show();
                $("#beli2").hide();
                $("#beli1").hide();
                $("#beli4").hide();
            });
            $("#pay4").click(function() {
                $("#beli4").show();
                $("#beli2").hide();
                $("#beli3").hide();
                $("#beli1").hide();
            });
        });

        function harga(harga) {
            $("#harga").val(harga);
            $("#harga1").val(harga);
            $("#harga2").val(harga);
            $("#harga3").val(harga);
            $("#harga4").val(harga);
        }

    </script>
</body>

</html>