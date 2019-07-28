<?php
class Blok extends MasterModel {
    function __construct() {
        parent::__construct();
        $this->schema = [
            'id_blok' => 'primary:auto',
            'no_blok' => 'required:text:50'            
        ];
        $this->table = 'blok';
        $this->primaryKey = 'id_blok';
        $this->showFields = [            
            'id_blok' => 'ID',
            'no_blok' => 'NO. BLOK'
        ];
    }
}
?>