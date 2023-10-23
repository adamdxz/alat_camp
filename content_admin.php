<?php
// Buat koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camping";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Handle update status order dan penghapusan order jika ada pengiriman formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle update status order
    if (isset($_POST["update_order"])) {
        $order_id = $_POST["order_id"];
        $new_status = $_POST["new_status"];

        // Update status order dalam database
        $update_query = "UPDATE orders SET status = '$new_status' WHERE id = $order_id";
        $conn->query($update_query);
    }
    
    // Handle delete order
    if (isset($_POST["delete_order"])) {
        $order_id = $_POST["order_id"];

        // Hapus order dari database
        $delete_query = "DELETE FROM orders WHERE id = $order_id";
        $conn->query($delete_query);
    }
}

// Query SQL untuk mengambil data
$query = "SELECT * FROM orders";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tenda 4</th>
                    <th>Gas</th>
                    <th>Kompor</th>
                    <th>Nesting</th>
                    <th>Lampu</th>
                    <th>Tenda 2</th>
                    <th>Sleeping Bag</th>
                    <th>Matras</th>
                    <th>Kayu Bakar</th>
                    <th>Flysheet</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['nama'] . '</td>';
                        echo '<td>' . $row['mail'] . '</td>';
                        echo '<td>' . $row['no_hp'] . '</td>';
                        echo '<td>' . number_format($row['total_harga'], 2) . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                        echo '<td>' . $row['tent_4'] . '</td>';
                        echo '<td>' . $row['gas'] . '</td>';
                        echo '<td>' . $row['kompor'] . '</td>';
                        echo '<td>' . $row['nesting'] . '</td>';
                        echo '<td>' . $row['lampu'] . '</td>';
                        echo '<td>' . $row['tent_2'] . '</td>';
                        echo '<td>' . $row['sleeping_bag'] . '</td>';
                        echo '<td>' . $row['matras'] . '</td>';
                        echo '<td>' . $row['kayu_bakar'] . '</td>';
                        echo '<td>' . $row['flysheet'] . '</td>';
                        echo '<td>
                            <form method="post">
                                <input type="hidden" name="order_id" value="' . $row['id'] . '">
                                <select name="new_status">
                                    <option value="Diproses">Diproses</option>
                                    <option value="Dikirim">Dikirim</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                                <input type="submit" name="update_order" value="Update">
                            </form>
                            <form method="post">
                                <input type="hidden" name="order_id" value="' . $row['id'] . '">
                                <input type="submit" name="delete_order" value="Delete">
                            </form>
                        </td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="15">No data found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Laba Rugi</h6>
            </div>
            <div class="card-body">
                <?php
                // Connect to your database
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'camping';
                $conn = mysqli_connect($host, $username, $password, $database);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch revenue and expenses data from the 'orders' table
                $sql = "SELECT SUM(total_harga) AS total_revenue, SUM(tent_4 + gas + kompor + nesting + lampu + tent_2 + sleeping_bag + matras + kayu_bakar + flysheet) AS total_expenses FROM orders";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    $totalRevenue = $row['total_revenue'];
                    $totalExpenses = $row['total_expenses'];

                    mysqli_free_result($result);
                } else {
                    $totalRevenue = 0;
                    $totalExpenses = 0;
                }

                // Calculate net profit
                $netProfit = $totalRevenue - $totalExpenses;
                ?>

                <h2>Pendapatan</h2>
                <p>Total Pendapatan: Rp <?= number_format($totalRevenue, 2) ?></p>

                <h2>Biaya Operasional</h2>
                <p>Total Biaya Operasional: Rp <?= number_format($totalExpenses, 2) ?></p>

                <h2>Laba Bersih</h2>
                <p>Laba Bersih: Rp <?= number_format($netProfit, 2) ?></p>

                <?php
                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>
