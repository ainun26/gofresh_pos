<section class="content-header">
      <h1>
        Supplier
        <small>Pemasok Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
            <div class="pull-right" >
                <a href="<?= site_url('supplier') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-reply-all"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <!-- form start -->
                    <form action="<?=site_url('supplier/process')?>" method="POST">
                        <div class="form-group">
                            <label>Supplier Name *</label>
                            <input type="hidden" name="id" value="<?=$row->supplier_id?>">
                            <input type="text" value="<?=$row->name?>" class="form-control" name="supplier_name" required>
                        </div>
                        <div class="form-group">
                            <label>Number Phone *</label>
                            <input type="number" value="<?=$row->phone?>" class="form-control" name="phone" required>
                        </div> 
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea class="form-control" name="address" required><?=$row->address?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description"><?=$row->description?></textarea>
                        </div>
                    <!-- /.box-body -->

                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-primary btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>