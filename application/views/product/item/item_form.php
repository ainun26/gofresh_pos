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
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Items</h3>
            <div class="pull-right" >
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-reply-all"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <!-- form start -->
                    <?php echo form_open_multipart('item/process') ?>
                        <div class="form-group">
                            <label>Barcode *</label>
                            <input type="hidden" name="id" value="<?=$row->item_id?>">
                            <input type="text" value="<?=$row->barcode?>" class="form-control" name="barcode" required>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name *</label>
                            <input type="text" value="<?=$row->name?>" class="form-control" id="product_name" name="product_name" required>
                        </div>
                        <div class="from-group">
                            <label>Category *</label>
                            <?php echo form_dropdown('category', $category, $selectedcategory,
                            ['class' =>'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="from-group">
                            <label>Unit *</label>
                            <?php echo form_dropdown('unit', $unit, $selectedunit,
                            ['class' =>'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label>Price *</label>
                            <input type="number" value="<?=$row->price?>" class="form-control" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Image </label>
                            <?php if($page == 'edit') {
                                if($row->image != null) { ?>
                                    <div style="margin-bottom:4px">
                                        <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width: 80%;">
                                    </div>
                                <?php 
                                }
                            } ?>
                            <input type="file" class="form-control" name="image">
                            <small>(Biarkan kosong jika tidak ingin <?=$page == 'edit' ? 'diganti' : 'ditambahkan' ?> ) </small>
                        </div>
                    <!-- /.box-body -->

                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>

    </div>
</section>