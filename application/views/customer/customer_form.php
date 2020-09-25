<section class="content-header">
      <h1>
        Customer
        <small>Pelanggan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Customer</h3>
            <div class="pull-right" >
                <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-reply-all"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <!-- form start -->
                    <form action="<?=site_url('customer/process')?>" method="POST">
                        <div class="form-group">
                            <label>Customer Name *</label>
                            <input type="hidden" name="id" value="<?=$row->customer_id?>">
                            <input type="text" value="<?=$row->name?>" class="form-control" name="customer_name" required>
                        </div>
                        <div class="form-group">
                            <label>Gender *</label>
                            <select name="gender" class="form-control" required>
                                <option value="">--Pilih Gender--</option>
                                <option value="L" <?=$row->gender == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="P" <?=$row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Number Phone *</label>
                            <input type="number" value="<?=$row->phone?>" class="form-control" name="phone" required>
                        </div> 
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea class="form-control" name="address" required><?=$row->address?></textarea>
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