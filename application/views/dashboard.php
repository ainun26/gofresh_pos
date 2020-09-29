<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>

<!-- Main Conten -->
<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Items</span>
              <span class="info-box-number"><?=$this->fungsi->count_item() ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Supplier</span>
              <span class="info-box-number"><?=$this->fungsi->count_supplier() ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number"><?=$this->fungsi->count_customer() ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number"><?=$this->fungsi->count_user() ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    Guide
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-blue"></i>

              <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">Description web</a> GO Fresh </h3>

                <div class="timeline-body">
                  Web ini dibuat bertujuan untuk memudahkan <u>Pendataan </u> di sebuah badan usaha seperti ruko, toko, caffe 
                  dan sejenisnya.
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-gears bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-check"></i> Cara penggunaan</span>

                <h3 class="timeline-header no-border"><a href="#">Step by step</a></h3>
                <div class="timeline-body">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span class="badge badge-primary badge-pill">1</span>
                      Pada Sidebar anda dapat memilih tabel mana yang akan anda tambahkan, ubah, ataupun dihapus
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span class="badge badge-primary badge-pill">2</span>
                      Selain dapat menambahkan, mengubah, ataupun menghapus data. Dibagian 
                      Products->Item anda juga dapat mencetak barcode 
                      product sesuai yang pilih.
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span class="badge badge-primary badge-pill">3</span>
                      Pada bagian Stock Product, bertujuan untuk menambah ataupun mengurangi stock dari masing-masing
                      product item yang anda miliki. <br>
                      <small>
                        Keterangan : <br>
                        Stock In merupakan pendataan untuk sebuah product yang baru ditambahkan, ataupun dibeli. <br>
                        Stock Out merupakan pendataan untuk sebuah product yang memiliki kecacatan, habis, ataupun kadaluarsa.
                      </small> 

                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-comment"></i> FAQ</span>

                <h3 class="timeline-header"><a href="#">Call Me</a> Hubungi Developer</h3>

                <div class="timeline-body">
                  Jika anda masih kurang cukup mengerti, anda dapat menghubungi saya untuk penjelasan lebih lanjutnya.
                </div>
              </div>
            </li>
            <!-- END timeline item -->
        
</section>