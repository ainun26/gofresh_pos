<section class="content-header">
      <h1>
        User
        <small>Pengguna</small>
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
            <h3 class="box-title">Data Users</h3>
            <div class="pull-right" >
                <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width: 5%;"><?= $no++ ?></td>
                        <td><?= $data->username ?></td>
                        <td><?= $data->nama_user ?></td>
                        <td><?= $data->id_level == 1 ? "Admin"  : "Kasir" ?></td>
                        <td class="text-center" width="160px">
                            <form action="<?=site_url('user/del')?>" method="POST">
                            <a href="<?=site_url('user/edit/'.$data->id_user)?>" name="id_user" class="btn btn-success btn-xs">
                                <i class="fa fa-edit"></i> Update
                            </a>
                                <input type="hidden" name="id_user" value="<?= $data->id_user?>">
                                <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">
                                    <i class="fa fa-eraser">Delete</i> 
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>