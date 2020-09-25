<section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Create Users</h3>
            <div class="pull-right" >
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-reply-all"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4"> <?php //echo validation_errors() ?>
                    <!-- form start -->
                    <form action="" method="POST">
                        <div class="form-group <?= form_error('fullnama') ? 'has-error': null ?>">
                        <label>Name *</label>
                        <input type="text" value="<?=set_value('fullnama') ?>" class="form-control" name="fullnama" placeholder="Name">
                        <span class="help-block"><?= form_error('fullnama') ?></span>
                        </div> 
                        <div class="form-group <?= form_error('username') ? 'has-error': null ?>">
                        <label>Username *</label>
                        <input type="text" value="<?=set_value('username') ?>" class="form-control" name="username" placeholder="Username">
                        <span class="help-block"><?= form_error('username') ?></span>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error': null ?>">
                        <label>Password *</label>
                        <input type="password" value="<?=set_value('password') ?>" class="form-control" name="password" placeholder="Password">
                        <span class="help-block"><?= form_error('password') ?></span>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error': null ?>">
                        <label>Password Confirmation *</label>
                        <input type="password" value="<?=set_value('passconf') ?>" class="form-control" name="passconf" placeholder="Password Confirmation">
                        <span class="help-block"><?= form_error('passconf') ?></span>
                        </div>

                        <div class="form-group <?= form_error('level') ? 'has-error': null ?>">
                        <label>Level *</label>
                        <select  name="level" class="form-control">
                        <option value="">-- Pilih Level --</option>
                        <option value="1" <?=set_value('level') == 1 ? "selected" : null ?> >Admin</option>
                        <option value="3" <?=set_value('level') == 3 ? "selected" : null ?> >Kasir</option>
                        </select>
                        <span class="help-block"><?= form_error('level') ?></span>
                        </div>
                    <!-- /.box-body -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
                            <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>