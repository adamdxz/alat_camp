<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penjualan Barang</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        session_start();

        if (isset($_SESSION['admin'])) {
            require_once 'sidebar.php';

        } 
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <?php if (isset($_SESSION['admin'])) { ?>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['admin'] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <?php } ?>



                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Mulai Konten Halaman -->
                <div class="container-fluid">
                    <?php if (!isset($_SESSION['admin'])) { ?>
                    <form method="post" action="admin_login.php">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="login_admin">Login</button>
                    </form>
                    <?php } ?>



                    <!-- Judul Halaman -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Persewaan Alat Camping</h1>
                    </div>

                    <!-- Formulir untuk Nama, Alamat, dan Nomor Telepon -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Penyewa</h6>
                                </div>
                                <div class="card-body">
                                    <form action="proses_pemesanan.php" method="post">

                                        <h2>Paket Penjualan Optimal:</h2>
                                        <ul>
                                            <?php
                                            // Sample definition for $optimal_combination
                                            $optimal_combination = [
                                                'Tenda 4' => 2,
                                                'Gas' => 1,
                                                'Kompor' => 1,
                                                'Nesting' => 3,
                                                'Lampu' => 2,
                                                'Tenda 2' => 1,
                                                'Sleeping Bag' => 2,
                                                'Matras' => 1,
                                                'Kayu Bakar' => 1,
                                                'Flysheet' => 1,
                                            ];

                                            foreach ($optimal_combination as $key => $quantity) {
                                                if ($quantity > 0) {
                                                    echo "<li>$key: $quantity</li>";
                                                }
                                            }
                                            ?>
                                        </ul>

                                        <div class="form-group">
                                            <label for="nama">Nama:</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required
                                                placeholder="Masukkan nama Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="mail">E-mail:</label>
                                            <input type="email" class="form-control" id="mail" name="mail" required
                                                placeholder="Masukkan alamat email Anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Nomor HP:</label>
                                            <input type="tel" class="form-control" id="no_hp" name="no_hp" required
                                                placeholder="Masukkan nomor HP Anda">
                                        </div>

                                        <h2>Pilihan Alat Camping:</h2>
                                        <div class="row">
                                            <?php
                                            // Define equipment options
                                            $equipment_options = [
                                                'tenda_4' => 'Tenda 4',
                                                'gas' => 'Gas',
                                                'kompor' => 'Kompor',
                                                'nesting' => 'Nesting',
                                                'lampu' => 'Lampu',
                                                'tenda_2' => 'Tenda 2',
                                                'sleeping_bag' => 'Sleeping Bag',
                                                'matras' => 'Matras',
                                                'kayu_bakar' => 'Kayu Bakar',
                                                'flysheet' => 'Flysheet',
                                            ];

                                            foreach ($equipment_options as $key => $option) {
                                                echo '<div class="col-lg-3">';
                                                echo '<div class="form-group">';
                                                echo "<label for='$key'>$option:</label>";
                                                echo "<input type='number' class='form-control' id='$key' name='$key' min='0'>";
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <span id="totalHarga"></span>

                                    </form>
                                    <h2>Daftar Harga Alat Camping:</h2>
                                    <ul>
                                        <li>Tenda 4 - Rp 50,000</li>
                                        <li>Gas - Rp 10,000</li>
                                        <li>Kompor - Rp 15,000</li>
                                        <li>Nesting - Rp 12,500</li>
                                        <li>Lampu - Rp 10,000</li>
                                        <li>Tenda 2 - Rp 35,000</li>
                                        <li>Sleeping Bag - Rp 12,500</li>
                                        <li>Matras - Rp 10,000</li>
                                        <li>Kayu Bakar - Rp 10,000</li>
                                        <li>Flysheet - Rp 10,000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Konten Halaman -->


            </div>
            <!-- End of Main Content -->

            <?php

            if (isset($_SESSION['admin'])) {
                require_once 'content_admin.php';
            } 
            ?>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        // Fungsi untuk menghitung total harga
        function calculateTotal() {
            // Mendapatkan semua input jumlah item
            var tent_4 = parseFloat(document.getElementById("tenda_4").value) || 0;
            var gas = parseFloat(document.getElementById("gas").value) || 0;
            var kompor = parseFloat(document.getElementById("kompor").value) || 0;
            var nesting = parseFloat(document.getElementById("nesting").value) || 0;
            var lampu = parseFloat(document.getElementById("lampu").value) || 0;
            var tent_2 = parseFloat(document.getElementById("tenda_2").value) || 0;
            var sleeping_bag = parseFloat(document.getElementById("sleeping_bag").value) || 0;
            var matras = parseFloat(document.getElementById("matras").value) || 0;
            var kayu_bakar = parseFloat(document.getElementById("kayu_bakar").value) || 0;
            var flysheet = parseFloat(document.getElementById("flysheet").value) || 0;

            // Daftar harga alat camping
            var harga_tent_4 = 50000;
            var harga_gas = 10000;
            var harga_kompor = 15000;
            var harga_nesting = 12500;
            var harga_lampu = 10000;
            var harga_tent_2 = 35000;
            var harga_sleeping_bag = 12500;
            var harga_matras = 10000;
            var harga_kayu_bakar = 10000;
            var harga_flysheet = 10000;

            // Menghitung total harga
            var totalHarga = (tent_4 * harga_tent_4) + (gas * harga_gas) + (kompor * harga_kompor) + (nesting *
                harga_nesting) + (lampu * harga_lampu) + (tent_2 * harga_tent_2) + (sleeping_bag *
                harga_sleeping_bag) + (matras * harga_matras) + (kayu_bakar * harga_kayu_bakar) + (flysheet *
                harga_flysheet);

            // Menampilkan hasil perhitungan
            document.getElementById("totalHarga").textContent = "Total Harga: Rp " + totalHarga;
        }

        // Memanggil fungsi calculateTotal saat input berubah
        var inputElements = document.querySelectorAll("input[type='number']");
        inputElements.forEach(function (input) {
            input.addEventListener("input", calculateTotal);
        });
    </script>

</body>

</html>