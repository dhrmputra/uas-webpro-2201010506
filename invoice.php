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
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nota Transaksi</title>
            <link rel="stylesheet" href="css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>

        <body>
            <div class="container-nota">
                <div class="isi-nota">
                    <div class="isi-header">
                        <h2 style="text-align: center !important;">Brado Shop</h2>
                        <p>JL. Danau Tempe</p>
                        <p>Denpasar - Bali</p>
                        <p>Telp : 081234567890 </p>
                        <hr>
                    </div>
                    <?php
                    $idtopup = $_GET["p1"];
                    $sql = "SELECT * FROM tbtopup tu WHERE idtopup='$idtopup';";
                    $hasil = mysqli_query($cnn, $sql);
                    if (mysqli_num_rows($hasil) > 0) {
                        $h = mysqli_fetch_assoc($hasil);
                    ?>
                        <p>Nota Transaksi</p>

                        <br />
                        <p>Tanggal Transaksi : <?php echo date("D / M /Y"); ?></p>
                        <br />
                        <div class="header-nota">

                            <p>Nama : <?php echo $_SESSION["NAMA"] ?></p>

                        </div>
                        <table class="table table">
                            <tr>
                                <th>
                                    <p>Game ID</p>
                                </th>
                                <th>
                                    <p>Pesanan</p>
                                </th>
                                <th>
                                    <p>Harga</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p><?= $h["gameid"] ?></p>
                                </td>
                                <td>
                                    <p><?= $h["pesanan"] ?></p>
                                </td>
                                <td>
                                    <p><?= $h["harga"] ?></p>
                                </td>
                            </tr>

                        </table>
                </div>
            </div>
            <script type="text/javascript">
                window.print();
            </script>

        </body>

        </html>

    <?php
                    } else {
                        echo "<script>window.location.href='./histori.php';</script>";
                    }
    ?>
<?php
    } else {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
?>  