<?php
class Pajak extends MasterModel {
    function __construct() {
        parent::__construct();
        $this->schema = [
            'nop_pajak' => 'required:text:100',
            'nik_penduduk' => 'required:select:penduduk|nik_penduduk|nama_penduduk',
            'blok_pajak' => 'required:text:20',
            'jatuh_tempo' => 'required:date',
            'tahun_pajak' => 'required:number:4',
            'total_pajak' => 'required:number:10',            
            'id_kasun_penarik_pajak' => 'required:select:kasun|id_kasun|nama_kasun'
        ];
        $this->table = 'pajak';
        $this->primaryKey = 'nop_pajak';
        $this->showFields = [
            'nop_pajak' => 'NOP.',
            'nik_penduduk' => 'NIK',
            'nama_penduduk' => 'NAMA',
            'blok_pajak' => 'BLOK',
            'jatuh_tempo' => 'JATUH TEMPO',
            'tahun_pajak' => 'TAHUN',
            'total_pajak' => 'TOTAL',
            'id_kasun_penarik_pajak' => 'KASUN'
        ];
    }   
    function getAllData() {
        $query = "SELECT * FROM pajak pj INNER JOIN penduduk pd "
                . "ON pd.nik_penduduk = pj.nik_penduduk "
                . "INNER JOIN kasun ks ON pj.id_kasun_penarik_pajak = ks.id_kasun "
                . "ORDER BY jatuh_tempo DESC";
        return $this->db->query($query);
    }
}
?>