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
            <h3 class="box-title">Edit Users</h3>
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
                            <input type="hidden" name="id_user" value="<?= $row->id_user?>">
                            <input type="text" value="<?=$this->input->post('fullnama') ?: $row->nama_user ?>" class="form-control" name="fullnama">
                            <span class="help-block"><?= form_error('fullnama') ?></span>
                        </div> 
                        <div class="form-group <?= form_error('username') ? 'has-error': null ?>">
                            <label>Username *</label>
                            <input type="text" value="<?=$this->input->post('username') ?: $row->username ?>" class="form-control" name="username" >
                            <span class="help-block"><?= form_error('username') ?></span>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error': null ?>">
                            <label>Password |</label> <small>Biarkan kosong jika tidak ingin diganti</small>
                            <input type="password" value="<?=$this->input->post('password')?>" class="form-control" name="password">
                            <span class="help-block"><?= form_error('password') ?></span>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error': null ?>">
                            <label>Password Confirmation</label>
                            <input type="password" value="<?=$this->input->post('passconf') ?>" class="form-control" name="passconf">
                            <span class="help-block"><?= form_error('passconf') ?></span>
                        </div>

                        <div class="form-group <?= form_error('level') ? 'has-error': null ?>">
                            <label>Level *</label>
                            <select  name="level" class="form-control">
                                <?php $level = $this->input->post('level') ?: $row->id_level ?>
                                <option value="1" <?=$level == 1 ? "selected" : null ?> >Admin</option>
                                <option value="3" <?=$level == 3 ? "selected" : null ?> >Kasir</option>
                            </select>
                        <?= form_error('level') ?>
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