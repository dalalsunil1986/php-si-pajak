<?php
class Pajak extends MasterModel {
    function __construct() {
        parent::__construct();
        $this->schema = [
            'nop_pajak' => 'required:text:100',
            'nik_penduduk' => 'required:text:16',
            'blok_pajak' => 'required:text:20',
            'tanggal_pembayaran_pajak' => 'required:date',
            'tahun_pajak' => 'required:number',
            'total_pajak' => 'required:number',
            'total_bayar_pajak' => 'required:number',
            'id_kasun_penarik_pajak' => 'required:select:penduduk|nik_penduduk'
        ];
        $this->table = 'pajak';
        $this->primaryKey = 'nop_pajak';
        $this->showFields = [
            'nop_pajak' => 'NOP.',
            'nik_penduduk' => 'NIK',
            'nama_penduduk' => 'NAMA',
            'blok_pajak' => 'BLOK',
            'tanggal_pembayaran_pajak' => 'TGL. PEMBAYARAN',
            'tahun_pajak' => 'TAHUN',
            'total_pajak' => 'TOTAL PAJAK',
            'total_bayar_pajak' => 'TOTAL DI BAYAR',
            'nama_kasun' => 'KASUN PENARIK'
        ];
    }   
    function getAllData() {
        $query = "SELECT * FROM pajak pj INNER JOIN penduduk pd "
                . "ON pd.nik_penduduk = pj.nik_penduduk "
                . "INNER JOIN kasun ks ON pj.id_kasun_penarik_pajak = ks.id_kasun "
                . "ORDER BY tanggal_pembayaran_pajak DESC";
        return $this->db->query($query);
    }
}
?>