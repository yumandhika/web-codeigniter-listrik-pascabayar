


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Tarif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Dashboard Tarif</li>
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
              <h3 class="box-title">Data tarif</h3>
              <br>
              <div class="button-width-150px" style="float:right"><a href="tarif/add"><button type="button"  class="btn btn-block btn-primary">Tambah Tarif</button></a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30%;">Id Tarif</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 30%;">Daya</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 30%;">Tarif/kwh</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;"></th>
                </thead>
                <tbody>          
                <?php foreach($tarifs as $tarif){?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $tarif->id_tarif?></td>
                  <td><?php echo $tarif->daya?> V</td>
                  <td>Rp.<?php echo number_format($tarif->tarifperkwh,0,',',',')?></td>
                  <td><a href="tarif/edit/<?php echo $tarif->id_tarif?>"><button type="button" class="btn btn-block btn-warning">Edit</button></a></td>
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