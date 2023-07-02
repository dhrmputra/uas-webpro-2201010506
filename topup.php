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
                        <a class="nav-link me-4 text-white link-danger  " href="#"><i class="fa fa-user-circle-o  me-1" aria-hidden="true"></i></a>
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
        <div class="d-flex">
            <button class="btn btn-dark fs-5 fw-bold me-4" id="C1">SEMUA</button>
            <button class="btn btn-dark fs-5 fw-bold me-4" id="C2">GAME</button>
            <button class="btn btn-dark fs-5 fw-bold me-4" id="C3">PAKET DATA</button>
            <button class="btn btn-dark fs-5 fw-bold me-4" id="C4">ENTERTAIMENT</button>
        </div>
        <h3 id="judul" class="my-4 ms-4"></h3>
    </div>

    <section id="all" class="">
        <div class="container me-4" style="margin-top: 50px;">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/telkom.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgtelkom.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logotelkom.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">GameMax Booster MLBB</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/hero.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bghero.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logohero.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">H3RO</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/axis.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgaxis.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoaxis.png" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">AXIS OWSEM</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/ml.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgml.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoml.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Mobile Legend</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white my-4" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/genshin.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bggenshin.jpeg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logogenshin.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Genshin Impact</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white my-4" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/valo.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgvalo.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logovalo.png" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Valorant</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white my-4" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/spotify.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgspotify.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logospotify.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Spotify Premium</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white my-4" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/yt.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgyt.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoyt.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Youtube Premium</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/netflix.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgnetflix.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logonetflix.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Netflix</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="game" class="">
        <div class="container" style="margin-top: 50px;">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/ml.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgml.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoml.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Mobile Legend</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/genshin.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bggenshin.jpeg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logogenshin.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Genshin Impact</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/valo.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgvalo.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logovalo.png" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Valorant</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="">
        <div class="container" style="margin-top: 50px;">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/telkom.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgtelkom.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logotelkom.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">GameMax Booster MLBB</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/hero.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bghero.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logohero.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">H3RO</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/axis.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgaxis.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoaxis.png" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">AXIS OWSEM</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="entertainment" class="">
        <div class="container" style="margin-top: 50px;">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/spotify.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgspotify.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logospotify.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Spotify Premium</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/yt.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgyt.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logoyt.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Youtube Premium</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-transparent shadow text-white" style="width: 75%;height:150px;margin-right:40px">
                        <a href="./detail-topup/netflix.php" class="text-decoration-none">
                            <img class="card-img" style="height:110px" src="./img/bgnetflix.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <img src="./img/logonetflix.jpg" class="rounded-circle" style="width: 60px;height:60px;margin-left:35%" alt="">
                            </div>
                            <h5 class="card-title text-white text-center mt-1">Netflix</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        $(function() {
            $("#all").show();
            $("#game").hide();
            $("#paket").hide();
            $("#entertainment").hide();
            $("#C1").click(function() {
                $("#judul").html("All");
                $("#all").fadeIn(1000);
                $("#game").fadeOut(0);
                $("#paket").fadeOut(0);
                $("#entertainment").fadeOut(0);
            });
            $("#C2").click(function() {
                $("#judul").html("Game");
                $("#all").fadeOut(0);
                $("#game").fadeIn(1000);
                $("#paket").fadeOut(0);
                $("#entertainment").fadeOut(0);
            });
            $("#C3").click(function() {
                $("#judul").html("Paket Data");
                $("#all").fadeOut(0);
                $("#game").fadeOut(0);
                $("#paket").fadeIn(1000);
                $("#entertainment").fadeOut(0);
            });
            $("#C4").click(function() {
                $("#judul").html("Entertainment");
                $("#all").fadeOut(0);
                $("#game").fadeOut(0);
                $("#paket").fadeOut(0);
                $("#entertainment").fadeIn(1000);
            });
        });
    </script>
</body>

</html>