<?php 
    $controller = new TransaksiController();
    $data = $controller->getAllPajak();
    
    require_once("./view/transaksi/form-modal.php");

    if(isset($_GET['action'])){
        if($_GET['action'] === 'hapus') {
            $controller->model->delete($_GET['id_transaksi']);
            redirect('transaksi');
        }
    }

    if(isset($_POST['submit'])) {
        $controller->model->insert($_POST);
        redirect('transaksi');
    }
?>

<style>
    th, td {
        min-width: 120px!important;
    }
    .small-table {
        min-width: 100px!important;
    }
</style>

<div class="container" style="padding: 20px;">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table id="table-transaksi" class="table table-striped">
                    <thead>
                        <tr>
                            <th>AKSI</th>
                            <th>STATUS</th>
                            <th>TOTAL</th>
                            <th>TOTAL DIBAYAR</th>      
                            <th>NOMOR OPERASIONAL PEMBAYARAN</th>
                            <th>TAHUN PAJAK</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>JATUH TEMPO</th>                                                 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['data_pajak'] as $pajak) { 
                                $total_dibayar = $data['data_total_transaksi'][$pajak['nop_pajak']];
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo url('transaksi', [
                                        'action' => 'detail',
                                        'nop' => $pajak['nop_pajak'],
                                        'total_dibayar' => $total_dibayar,
                                        'is_lunas' => $total_dibayar >= $pajak['total_pajak'],
                                        'total_pajak' => $pajak['total_pajak'],
                                        'blok' => $pajak['no_blok']                                        
                                    ]); ?>" class="btn btn-primary" style="font-size: 8pt;">DETAIL</a>
                                </td>
                                <td><?php 
                                    if ($total_dibayar >= $pajak['total_pajak']) {
                                        echo "<span class='badge badge-success'>LUNAS</span>";
                                    } else {
                                        echo "<span class='badge badge-warning'>BELUM LUNAS</span>";
                                    }
                                ?></td>
                                <td><?php echo formatRupiah($pajak['total_pajak']); ?></td>
                                <td><?php echo formatRupiah($total_dibayar); ?></td> 
                                <td><?php echo $pajak['nop_pajak']; ?></td>
                                <td><?php echo $pajak['tahun_pajak']; ?></td>
                                <td><?php echo $pajak['nik_penduduk']; ?></td>
                                <td><?php echo $pajak['nama_penduduk']; ?></td>
                                <td><?php echo $pajak['jatuh_tempo']; ?></td>                                                               
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>