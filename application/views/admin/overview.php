<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php $this->load->view('template/navbar.php'); ?>
    <?php $this->load->view('template/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">DASHBOARD</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-primary">
                        <h3 class="widget-user-username">Selamat Datang</h3>
                        <h5 class="widget-user-desc">Ke Dalam TENDOU CMS</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="" src="<?php echo base_url() . 'dist/img/undip.png' ?>" alt="User Avatar" style="border: 0px ">
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <!-- /.col -->
                            <div class="Widget-user-username">
                                <div class="description-block">
                                    <h3 class="description-header">TENDOU CMS</h3>
                                    <h5 class="description-header">Ricky Rivaldo</h5>
                                    <a class="description">Informatika 2017</a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <h1 class="m-0 text-dark">Artikel Terakhir</h1>
                <br>
                <table id="example2" class="table table-bordered table-striped">
                <thead style="background-color: white;">
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <style>
                  tbody.belang tr:nth-child(even) {
                    background-color: white;
                  }
                </style>
                <div>
                  <tbody class="belang">
                    <!-- <tr>
                        <td>1</td>
                        <td>Betapa Imutnya Jo Yuri</td>
                        <td>IZ*ONE</td>
                        <td>Ricky Rivaldo</td>
                        <td>22 Mei 2020</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
                            <a onclick="" href="#!" class="btn btn-warning">Sembunyikan</a>
                            <a onclick="" href="#!" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr> -->
                    <?php foreach ($artikel as $a) {
                    ?>
                      <tr>
                        <td><?php echo  $a->no; ?></td>
                        <td><?php echo  $a->judul; ?></td>
                        <td><?php echo  $a->kategori; ?></td>
                        <td><?php echo  $a->penulis; ?></td>
                        <td><?php echo  $a->tanggal; ?></td>
                        <td>
                        <a href="" class="btn btn-info">Edit</a>
                        <a onclick="" href="#!" class="btn btn-warning">Sembunyikan</a>
                        <a onclick="" href="#!" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </div>
                <tfoot style="background-color: white;">
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
                <!-- Small boxes (Stat box) -->
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7">
                    </section>
                    <!-- /.Left col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>