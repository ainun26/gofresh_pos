<section class="content-header">
      <h1>
        Stock In
        <small>Barang Masuk / Pembelian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Stock In</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Stock In</h3>
            <div class="pull-right" >
                <a href="<?= site_url('stock/in') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-reply-all"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <!-- form start -->
                    <form action="<?=site_url('stock/process')?>" method="POST">
                        <div class="form-group">
                            <label>Date *</label>
                            <input type="date" class="form-control" value="<?=date('Y-m-d')?>" name="date" required>
                        </div>
                        <div>
                            <label for="barcode">Barcode *</label>
                        </div>
                        <div class="form-group input-group">
                            <input type="hidden" name="item_id" id="item_id" >
                            <input type="text" class="form-control" name="barcode" id="barcode" required autofocus>
                            <span class="input-group-btn">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="modal-item">
                                    <i class="fa fa-search"></i>
                                </button>

                            </span>
                        </div>
                        <div class="form-group">
                            <label>Item Name *</label>
                            <input type="text" class="form-control" name="item_name" id="item_name" readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="unit_name">Item Unit</label>
                                    <input type="text" name="unit_name" id="unit_name" value="." class="form-control" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="stock">Initial Stock</label>
                                    <input type="text" name="stock" id="stock" value="." class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Detail *</label>
                            <input type="text" class="form-control" name="detail" placeholder="Kulakan / Tambahan / etc" required>
                        </div>
                        <div class="form-group">
                            <label>Supplier</label>
                            <select name="sepplier" class="form-control" required>
                                <option>--Pilih--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Qty *</label>
                            <input type="number" class="form-control" name="qty" required>
                        </div>
                    <!-- /.box-body -->

                        <div class="form-group">
                            <button type="submit" name="in_add" class="btn btn-primary btn-flat">
                            <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Menampilkan button Model #searching Barcode -->
<!-- Modal -->
<div class="modal fade" id="modal-item">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select Product Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Content -->
        <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <td>Barcode</td>
                            <td>Name</td>
                            <td>Unit</td>
                            <td>Price</td>
                            <td>Stock</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($item as $key => $data) { ?>
                        <tr>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->unit_name?></td>
                            <td><?=$data->price?></td>
                            <td><?=$data->stock?></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->