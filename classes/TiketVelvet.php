<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti Spesifik
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga() {
        return $this->hargaDasarTiket; 
    }

    public function tampilkanInfoFasilitas() {
        // Mengubah nilai boolean (true/false) menjadi teks yang mudah dibaca
        $statusBantal = $this->bantalSelimutPack ? "Tersedia" : "Tidak Tersedia";
        $statusButler = $this->layananButler ? "Tersedia" : "Tidak Tersedia";
        
        return "Bantal & Selimut: {$statusBantal} | Layanan Butler: {$statusButler}";
    }
}
?>