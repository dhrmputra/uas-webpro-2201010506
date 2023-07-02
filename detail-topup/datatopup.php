<?php
include("../koneksi.php");

$jdpage = "List";
$pg = "./histori.php";

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
    $act = $_POST["act"];
    switch ($act) {
        case "store":
                $gameid = $_POST["gameid"];
                $zoneid = $_POST["zoneid"];
                $pesanan = $_POST["pesanan"];
                $harga = $_POST["harga"];
                $idtopup = md5($gameid);
                $sql = "INSERT INTO tbtopup(gameid, zoneid, pesanan,harga, idtopup) VALUES('$gameid', '$zoneid', '$pesanan','$harga', '$idtopup');";
                $hasil = mysqli_query($cnn, $sql);
                if ($hasil) {
                    echo '<script>window.location="../histori.php"</script>';
                    echo "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                } else {
                    $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal ditambahkan',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
                }
            break;
        case "destroy":
            $idtopup = $_POST['idtopup'];
            $sql = "DELETE FROM tbtopup WHERE idtopup='$idtopup';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data user berhasil dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            } else {
                $footer = "<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Data user gagal dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        </script>";
            }
            break;
    }
}

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];
    switch ($aksi) {
        case "new":
            $jdpage = "Tambah";
            $pg = "usernew.php";
            break;
        case "del":
            $jdpage = "Hapus";
            $pg = "userdel.php";
            break;
        default:
            $jdpage = "List";
            $pg = "histori.php";
    }
}