<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">List User</h5>
                            <h2 class="card-title">Total Daftar User <b>
                                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                                    echo mysqli_num_rows($stt); ?></b></h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area h-auto">
                        <div class="container konten">
                            <?php
                            $iduser = $_GET["p1"];
                            $sql = "SELECT tu.nama, tu.email, tu.username FROM tbuser tu WHERE tu.iduser='$iduser';";
                            $hasil = mysqli_query($cnn, $sql);
                            if (mysqli_num_rows($hasil) > 0) {
                                $h = mysqli_fetch_assoc($hasil);
                            ?>
                                <h3>Hapus Data User <?= $h["username"] ?></h3>
                                <form method="POST" action="./datauser.php">
                                    <input type="hidden" name="act" value="destroy">
                                    <input type="hidden" name="iduser" value="<?= $iduser ?>">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Alamat Email" value="<?= $h["email"] ?>">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="txUSER" class="form-control" id="floatingInput" placeholder="User Name" value="<?= $h["username"] ?>">
                                        <label for="floatingInput">User Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        &nbsp;
                                    </div>
                                    <button type="submit" class="btn btn-danger"> Hapus Data User </button>
                                    <a href="datauser.php" class="btn btn-secondary"> Batal </a>
                                </form>
                        </div>
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                            } else {
                                echo "<script>window.location.href='./datauser.php';</script>";
                            }
?>