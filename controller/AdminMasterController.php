<?php 
class AdminMasterController {
    function __construct() {
        $this->initModel();
    }

    private function initModel() {
        if(isset($_GET['table'])) {
            $table = $_GET['table'];
            switch($table) {
                case 'kasun':
                    $this->model = new Kasun(); break;
                case 'pajak':
                    $this->model = new Pajak(); break;
                case 'penduduk':
                    $this->model = new Penduduk(); break;
                case 'wilayah':
                    $this->model = new Wilayah(); break;
                default:
                    redirect('admin'); break;
            }
        } else {
            redirect('admin');
        }
    }

    public function getAllData() {
        return $this->model->getAllData();
    }
}
?>