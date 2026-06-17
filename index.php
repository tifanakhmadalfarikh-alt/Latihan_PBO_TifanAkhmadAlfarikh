<?php
// Memanggil file koneksi dan seluruh kelas
require_once 'koneksi/database.php';
require_once 'classes/TiketRegular.php';
require_once 'classes/TiketIMAX.php';
require_once 'classes/TiketVelvet.php';

// Inisialisasi koneksi database
$db = new Database();
$conn = $db->getConnection();

// Mengambil seluruh data dari tabel_tiket
$query = "SELECT * FROM tabel_tiket ORDER BY jenis_studio, jadwal_tayang ASC";
$result = $conn->query($query);

// Menyiapkan array untuk mengelompokkan data berdasarkan jenis studio
$tiketRegular = [];
$tiketIMAX = [];
$tiketVelvet = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Implementasi Polimorfisme: Membuat instansiasi objek berdasarkan jenis studio
        if ($row['jenis_studio'] == 'Regular') {
            $obj = new TiketRegular($row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], $row['jumlah_kursi'], $row['harga_dasar_tiket'], $row['tipe_audio'], $row['lokasi_baris']);
            $tiketRegular[] = ['data' => $row, 'objek' => $obj];
        } elseif ($row['jenis_studio'] == 'IMAX') {
            $obj = new TiketIMAX($row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], $row['jumlah_kursi'], $row['harga_dasar_tiket'], $row['kacamata_3d_id'], $row['efek_gerak_fitur']);
            $tiketIMAX[] = ['data' => $row, 'objek' => $obj];
        } elseif ($row['jenis_studio'] == 'Velvet') {
            $obj = new TiketVelvet($row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], $row['jumlah_kursi'], $row['harga_dasar_tiket'], $row['bantal_selimut_pack'], $row['layanan_butler']);
            $tiketVelvet[] = ['data' => $row, 'objek' => $obj];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Tiket Bioskop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { text-align: center; }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th, td { border: 1px solid #bdc3c7; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .harga { font-weight: bold; color: #27ae60; }
    </style>
</head>
<body>

    <h1>Daftar Pemesanan Tiket Bioskop</h1>

    <h2>Studio Regular</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Film</th>
            <th>Jadwal Tayang</th>
            <th>Jml Kursi</th>
            <th>Fasilitas (Polimorfik)</th>
            <th>Total Harga (Polimorfik)</th>
        </tr>
        <?php foreach ($tiketRegular as $item): ?>
        <tr>
            <td><?= $item['data']['id_tiket'] ?></td>
            <td><?= $item['data']['nama_film'] ?></td>
            <td><?= $item['data']['jadwal_tayang'] ?></td>
            <td><?= $item['data']['jumlah_kursi'] ?></td>
            <td><?= $item['objek']->tampilkanInfoFasilitas() ?></td>
            <td class="harga">Rp <?= number_format($item['objek']->hitungTotalHarga(), 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Studio IMAX</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Film</th>
            <th>Jadwal Tayang</th>
            <th>Jml Kursi</th>
            <th>Fasilitas (Polimorfik)</th>
            <th>Total Harga (Polimorfik)</th>
        </tr>
        <?php foreach ($tiketIMAX as $item): ?>
        <tr>
            <td><?= $item['data']['id_tiket'] ?></td>
            <td><?= $item['data']['nama_film'] ?></td>
            <td><?= $item['data']['jadwal_tayang'] ?></td>
            <td><?= $item['data']['jumlah_kursi'] ?></td>
            <td><?= $item['objek']->tampilkanInfoFasilitas() ?></td>
            <td class="harga">Rp <?= number_format($item['objek']->hitungTotalHarga(), 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Studio Velvet</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Film</th>
            <th>Jadwal Tayang</th>
            <th>Jml Kursi</th>
            <th>Fasilitas (Polimorfik)</th>
            <th>Total Harga (Polimorfik)</th>
        </tr>
        <?php foreach ($tiketVelvet as $item): ?>
        <tr>
            <td><?= $item['data']['id_tiket'] ?></td>
            <td><?= $item['data']['nama_film'] ?></td>
            <td><?= $item['data']['jadwal_tayang'] ?></td>
            <td><?= $item['data']['jumlah_kursi'] ?></td>
            <td><?= $item['objek']->tampilkanInfoFasilitas() ?></td>
            <td class="harga">Rp <?= number_format($item['objek']->hitungTotalHarga(), 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>