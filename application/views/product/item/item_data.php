<section class="content-header">
      <h1>
        Items
        <small>Data Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Items</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
  <!-- Loat Messages -->
  <?php $this->view('messages') ?>
  <!-- End Loat Messages -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Product Items</h3>
            <div class="pull-right" >
                <a href="<?=site_url('item/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create Product Item
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width: 5%;"><?= $no++ ?>.</td>
                        <td>
                            <?= $data->barcode ?><br>
                            <a href="<?=site_url('item/barcode_qrcode/'.$data->item_id)?>" name="item_id" class="btn btn-default btn-xs">
                                Generate<i class="fa fa-barcode"></i>
                            </a>
                        </td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->category_name ?></td>
                        <td><?= $data->unit_name ?></td>
                        <td class="text-right"><?=indo_currency($data->price)?></td>
                        <td class="text-right"><?= $data->stock ?></td>
                        <td>
                            <?php if($data->image != null) { ?>
                                <img src="<?=base_url('uploads/product/'.$data->image)?>" style="width: 100px;">
                            <?php } ?>
                        </td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('item/edit/'.$data->item_id)?>" name="item_id" class="btn btn-success btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('item/del/'.$data->item_id)?>" name="item_id" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">
                                <i class="fa fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?> -->
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
  $(document).ready(function() {
    $('#table1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?=site_url('item/get_ajax')?>",
            "type": "POST"
        },
        "columnDefs": [
        {
            "targets": [5, 6],
            "className": 'text-right'
        },
        {
            "targets": [7, 8],
            "className": 'text-center'
        },
        {
            "targets": [7, 8],
            "orderable": false
        }
        ] 
    })
  })
</script>