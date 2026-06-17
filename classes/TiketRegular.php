<?php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti Spesifik
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari kelas induk (Tiket)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Mengisi metode abstrak
    public function hitungTotalHarga() {
        return $this->hargaDasarTiket; // Harga normal
    }

    public function tampilkanInfoFasilitas() {
        return "Audio: {$this->tipeAudio} | Baris: {$this->lokasiBaris}";
    }
}
?>