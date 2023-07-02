<?php
include './koneksi.php';
session_start();
if (isset($_SESSION["login"])) {
    if (!$_SESSION["NAMA"] == "") {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dashboard</title>
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
                                <a class="nav-link me-4 text-white link-danger" href="./index.php"><i class="fa fa-home me-1" aria-hidden="true"></i> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4 text-white link-danger" href="./topup.php"><i class="fa fa-shopping-bag  me-1" aria-hidden="true"></i> Top Up </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4 text-white link-danger" href="./histori.php"><i class="fa fa-ticket  me-1" aria-hidden="true"></i> Histori </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4 text-white link-danger" href="./contact.php"><i class="fa fa-comment  me-1" aria-hidden="true"></i> Contact Us </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4 text-white link-danger  " href="./logout.php"><i class="fa fa-user-circle-o  me-1" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/caraousel11.jpg" class="d-block w-100" style="width: 100%;height:500px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/caraousel22.jpg" class="d-block w-100" style="width: 100%;height:500px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/caraousel3.jpg" class="d-block w-100" style="width: 100%;height:500px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <div class="container" style="margin-top: 50px;">
                <h3 class="text-center fw-bold my-4">Contact Us</h3>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?php echo $_SESSION["NAMA"] ?>" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <h6>Beri Rating</h6>
                    <div class="rating-stars fs-1">
                        <i class="star fa fa-star"></i>
                        <i class="star fa fa-star"></i>
                        <i class="star fa fa-star"></i>
                        <i class="star fa fa-star"></i>
                        <i class="star fa fa-star"></i>
                    </div>
                    <p id="rating-value">Rating: 0</p>

                    <button type="submit" class="btn btn-danger">Kirim</button>
                </form>

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
                            <h5>Menu</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Top Up</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Voucher</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col mb-3">
                            <h5>Follow Us</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Facebook</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Instagram</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Tiktok</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white link-danger">Youtube</a></li>
                            </ul>
                        </div>

                        <div class="col-mb-3">
                            <form>
                                <h5 class="mb-4">Subscribe to our newsletter</h5>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Email address</label>
                                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                    <button class="btn btn-danger" type="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </footer>
                </div>

                <script src="jquery-3.7.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $(".star").click(function() {
                            var index = $(this).index();
                            $(".star").removeClass("fa-star").addClass("fa-star-o");
                            for (var i = 0; i <= index; i++) {
                                $(".star").eq(i).removeClass("fa-star-o").addClass("fa-star");
                            }
                            $("#rating-value").text("rating: " + (index + 1));
                            
                        });
                    });
                </script>
        </body>

        </html>

<?php
    } else {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
?>