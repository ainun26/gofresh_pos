

<td class="text-center" width="160px">
    <a id="stock_detail" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-profile"
        data-username="<?=$data->username?>"
        data-nama_user="<?=$data->nama_user?>"
        data-level="<?=$data->id_level?>"></a>
                                
</td>

<!-- Modal -->
<div class="modal fade" id="modal-profile">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Profil</h4>
      </div>
        <!-- Content -->
        <div class="modal-body table-responsive">
               <table class="table table-bordered no-margin">
                   <tbody>
                       <tr>
                            <th>Username</th>
                            <td><span id="username"></span></td>
                       </tr>
                       <tr>
                            <th>Nama User</th>
                            <td><span id="nama_user"></span></td>
                       </tr>
                       <tr>
                            <th>Level </th>
                            <td><span id="level"></span></td>
                       </tr>
                   </tbody>
               </table>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $(document).on('click', '#stock_detail', function() {
      var username = $(this).data('username');
      var nama_user = $(this).data('nama_user');
      var level = $(this).data('id_level');
      $('#username').text(username);
      $('#nama_user').text(nama_user);
      $('#level').text(level);
    })
  })
</script>