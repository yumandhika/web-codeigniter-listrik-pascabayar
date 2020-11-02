
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Admin PPOB</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Dashboard Admin PPOB</li>
      </ol>
    </section>
    <?php echo $this->session->flashdata('hasil');?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12 col-lg-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Admin PPOB</h3>
              <br>
              <div class="button-width-150px" style="float:right"><a href="admin/add"><button type="button"  class="btn btn-block btn-primary">Tambah Admin</button></a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 45%;">Nama Admin</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 45%;">Saldo</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;"></th>
                </thead>
                <tbody>          
                <?php foreach($admins as $admin){?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $admin->nama_admin?></td>
                  <td>Rp.<?php echo number_format($admin->saldo,0,',',',')?></td>
                  <td><a href="tambahsaldo/<?php echo $admin->id_saldo ?>"><button type="button" class="btn btn-block btn-warning">Tambah Saldo</button></a></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->