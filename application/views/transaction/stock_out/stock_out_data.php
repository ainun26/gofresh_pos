<section class="content-header">
      <h1>
        Stock Out
        <small>Barang Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Stock Out</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
  <!-- Loat Messages -->
  <?php $this->view('messages') ?>
  <!-- End Loat Messages -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock Out</h3>
            <div class="pull-right" >
                <a href="<?=site_url('stock/out/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Add Stock Out
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Qty</th>
                        <th>Info</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                        foreach($row as $key => $data) { ?>
                        <tr>
                            <td style="width: 5%;"><?= $no++ ?>.</td>
                            <td><?= $data->barcode ?></td>
                            <td><?= $data->item_name ?></td>
                            <td><?= $data->qty ?></td>
                            <td><?= $data->detail ?></td>
                            <td class="text-center"><?= indo_date($data->date)?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('stock/out/del/'.$data->stock_id.'/'.$data->item_id)?>" name="stock_id" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

