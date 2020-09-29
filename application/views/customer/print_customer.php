<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!-- Main Conten -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Customer</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width: 5%;"><?= $no++ ?>.</td>
                        <td><?= $data->name ?></td>
                        <td><?= $data->gender ?></td>
                        <td><?= $data->phone ?></td>
                        <td><?= $data->address ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script type="text/javascript">
    window.print();
</script>

</body>

</html>