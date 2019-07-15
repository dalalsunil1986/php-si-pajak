<?php
class Wilayah extends MasterModel {
    function __construct() {
        parent::__construct();
        $this->schema = [
            'id_wilayah' => 'auto',
            'nama_wilayah' => 'required:text:50'            
        ];
        $this->table = 'wilayah';
        $this->primaryKey = 'id_wilayah';
        $this->showFields = [            
            'id_wilayah' => 'ID',
            'nama_wilayah' => 'NAMA'               
        ];
    }
}
?>