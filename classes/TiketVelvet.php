<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga() {
        // Surcharge kelas premium 50%
        $totalSementara = $this->jumlah_kursi * $this->hargaDasarTiket;
        return $totalSementara * 1.50;
    }

    public function tampilkanInfoFasilitas() {
        $statusBantal = $this->bantalSelimutPack ? "Tersedia" : "Tidak Tersedia";
        $statusButler = $this->layananButler ? "Tersedia" : "Tidak Tersedia";
        
        return "Bantal & Selimut: {$statusBantal} | Layanan Butler: {$statusButler}";
    }
}
?>