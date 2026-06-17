<?php
abstract class Tiket {
    // Properti Terenkapsulasi (protected) sesuai instruksi
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $hargaDasarTiket;

    // Constructor ini berfungsi untuk memetakan nilai dari kolom database ke properti kelas
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->hargaDasarTiket = $hargaDasarTiket;
    }

    // Metode Abstrak (Tanpa Isi/Body)
    // Metode ini WAJIB diimplementasikan oleh kelas anaknya (Regular, IMAX, Velvet) nanti
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();
}
?>