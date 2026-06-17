<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $hargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga() {
        // Biaya tambahan teknologi layar & audio Rp35.000
        $totalSementara = $this->jumlah_kursi * $this->hargaDasarTiket;
        return $totalSementara + 35000;
    }

   public function tampilkanInfoFasilitas() {
        // Jika kacamata3dId ada isinya, tampilkan. Jika tidak (NULL), tulis "Tidak Tersedia"
        $infoKacamata = $this->kacamata3dId ? $this->kacamata3dId : "Tidak Tersedia";
        
        // Lakukan hal yang sama untuk efek gerak
        $infoEfek = $this->efekGerakFitur ? $this->efekGerakFitur : "Tidak Tersedia";

        return "Kacamata 3D ID: {$infoKacamata} | Efek Gerak: {$infoEfek}";
    }
}
?>