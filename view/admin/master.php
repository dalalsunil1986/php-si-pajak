<?php
    $controller = new AdminMasterController();
    $data = $controller->getAllData();
    $fields = $controller->model->showFields;
?>

<?php require("./view/admin/form-modal.php"); ?>

<div class="container" style="padding: 20px;">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <h3>DATA <?php echo strtoupper($_GET['table']); ?></h3>
                <a href="<?php echo url('admin-master', [
                    'table' => $controller->model->table,
                    'action' => 'tambah'
                ]); ?>" class="btn btn-success float-right" style="margin-bottom: 20px;">TAMBAH</a>
                <table id="data" class="table table-bordered">
                    <thead>
                        <?php foreach($fields as $key=>$field) { ?>
                            <th><?php echo $field; ?></th>
                        <?php } ?>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php while($row = $data->fetch_assoc()) { ?>
                            <tr>
                                <?php foreach($fields as $key=>$field) { ?>
                                    <td><?php echo valueTransformer($key, $row[$key]); ?></td>
                                <?php } ?>
                                <td>
                                    <a href="#" class="btn btn-warning">UBAH</a>
                                    <a href="#" class="btn btn-danger">HAPUS</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>