


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Pembayaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Pembayaran</a></li>
        <li class="active">Dashboard Pembayaran</li>
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
              <h3 class="box-title">Data Pembayaran</h3>
              <br> 
              <div class="button-width-150px" style="float:right"><a href="cetak"><button type="button"  class="btn btn-block btn-danger">Cetak Pdf</button></a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20%;">Nama Pelanggan</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20%;">Nomor Kwh</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 25%;">Alamat</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20%;">Tanggal Pembayaran</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 15%;">Total Bayar</th>
                </thead>
                <tbody>          
                <?php foreach($pembayarans as $pembayaran){?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $pembayaran->nama_pelanggan?></td>
                  <td><?php echo $pembayaran->nomor_kwh?></td>
                  <td><?php echo $pembayaran->alamat?></td>
                  <td><?php echo $pembayaran->tanggal_pembayaran?></td>
                  <td>Rp.<?php echo number_format($pembayaran->total_bayar,0,",",",")?></td>
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