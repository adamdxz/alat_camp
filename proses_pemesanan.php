<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mail = $_POST['mail'];
    $no_hp = $_POST['no_hp'];

    $equipment_prices = [
        'tenda_4' => 50000,
        'gas' => 10000,
        'kompor' => 15000,
        'nesting' => 12500,
        'lampu' => 10000,
        'tenda_2' => 35000,
        'sleeping_bag' => 12500,
        'matras' => 10000,
        'kayu_bakar' => 10000,
        'flysheet' => 10000,
    ];

    $jumlah_barang_tenda_4 = 10;
    $jumlah_barang_gas = 20;
    $jumlah_barang_kompor = 15;
    $jumlah_barang_nesting = 12;
    $jumlah_barang_lampu = 20;
    $jumlah_barang_tenda_2 = 10;
    $jumlah_barang_sleeping_bag = 15;
    $jumlah_barang_matras = 20;
    $jumlah_barang_kayu_bakar = 30;
    $jumlah_barang_flysheet = 10;

    $optimal_combination = [];
    $max_revenue = 0;

    for ($tenda_4 = 0; $tenda_4 <= $jumlah_barang_tenda_4; $tenda_4++) {
        for ($gas = 0; $gas <= $jumlah_barang_gas; $gas++) {
            for ($kompor = 0; $kompor <= $jumlah_barang_kompor; $kompor++) {
                for ($nesting = 0; $nesting <= $jumlah_barang_nesting; $nesting++) {
                    for ($lampu = 0; $lampu <= $jumlah_barang_lampu; $lampu++) {
                        for ($tenda_2 = 0; $tenda_2 <= $jumlah_barang_tenda_2; $tenda_2++) {
                            for ($sleeping_bag = 0; $sleeping_bag <= $jumlah_barang_sleeping_bag; $sleeping_bag++) {
                                for ($matras = 0; $matras <= $jumlah_barang_matras; $matras++) {
                                    for ($kayu_bakar = 0; $kayu_bakar <= $jumlah_barang_kayu_bakar; $kayu_bakar++) {
                                        for ($flysheet = 0; $flysheet <= $jumlah_barang_flysheet; $flysheet++) {
                                            $revenue = $tenda_4 * $equipment_prices['tenda_4'] + $gas * $equipment_prices['gas'] + $kompor * $equipment_prices['kompor'] + $nesting * $equipment_prices['nesting'] + $lampu * $equipment_prices['lampu'] + $tenda_2 * $equipment_prices['tenda_2'] + $sleeping_bag * $equipment_prices['sleeping_bag'] + $matras * $equipment_prices['matras'] + $kayu_bakar * $equipment_prices['kayu_bakar'] + $flysheet * $equipment_prices['flysheet'];

                                            if ($revenue > $max_revenue) {
                                                $optimal_combination = [
                                                    'tenda_4' => $tenda_4,
                                                    'gas' => $gas,
                                                    'kompor' => $kompor,
                                                    'nesting' => $nesting,
                                                    'lampu' => $lampu,
                                                    'tenda_2' => $tenda_2,
                                                    'sleeping_bag' => $sleeping_bag,
                                                    'matras' => $matras,
                                                    'kayu_bakar' => $kayu_bakar,
                                                    'flysheet' => $flysheet,
                                                ];
                                                $max_revenue = $revenue;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "camping";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO orders (nama, mail, no_hp, total_harga) VALUES ('$nama', '$mail', '$no_hp', $max_revenue)";

    if ($conn->query($sql) === TRUE) {
        echo "Terima kasih, $nama! Total harga pesanan Anda adalah Rp " . number_format($max_revenue, 2);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Anda tidak mengirimkan pesanan.";
}

header("Location: index.php");
?>
