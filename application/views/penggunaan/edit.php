 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Penggunaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard Penggunaan</a></li>
        <li class="active">Buat Tagihan Penggunaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Buat Tagihan Penggunaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form role="form" action="../update" method="POST">
              <div class="box-body">

                <div class="row">
                
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                      <label for="exampleInputEmail1">ID Penggunaan</label>
                      <input type="id" class="form-control" id="id_pelanggan"  value="<?php echo $penggunaan[0]['id_pelanggan'] ?>" name="id_pelanggan" placeholder="Enter email" readonly>
                      <input type="id" class="form-control" id="id_pelanggan"  value="<?php echo $penggunaan[0]['id_penggunaan'] ?>" name="id_penggunaan" placeholder="Enter email" readonly style="height:0;visibility:hidden">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                      <label for="exampleInputEmail1">Nomor Kwh</label>
                      <input type="text" class="form-control" id="nomor_kwh" name="nomor_kwh" value="<?php echo $penggunaan[0]['nomor_kwh'] ?>" readonly placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                      <label for="exampleInputPassword1">Nama Pengguna</label>
                      <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $penggunaan[0]['nama_pelanggan'] ?>"readonly placeholder="Password">
                    </div>
                  </div>
                    <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                    <label>Tanggal awal:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" value="<?php echo $penggunaan[0]['bulan'] ?>"readonly  class="form-control pull-right" id="tanggal_awal">
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                      <label for="exampleInputPassword1">Meter Awal</label>
                      <input type="text" class="form-control" id="meter_awal" name="meter_awal" value="<?php echo $penggunaan[0]['meter_awal'] ?>"readonly placeholder="nama admin">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group crud-admin" style="width:300px">
                      <label for="exampleInputPassword1">Meter Akhir</label>
                      <input type="text" class="form-control" id="meter_akhir" name="meter_akhir" value="<?php echo $penggunaan[0]['meter_akhir'] ?>" placeholder="nama admin">
                    </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group crud-admin" style="width:300px">
                    <label>Tanggal:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" value="<?php echo $penggunaan[0]['bulan'] ?>" class="form-control pull-right" id="datepicker" name="tanggal">
                    </div>
                    </div>
                  </div>
                  </div>
                <!-- /.input group -->
              </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Buat Tagihan</button>
                <button type="submit" id="hapus" name="hapus" value="hapus" class="btn btn-danger">Kembali</button>
              </div>
            </form>


          </div>

    </section>
</div>

<div class="colorpicker dropdown-menu colorpicker-hidden colorpicker-with-alpha colorpicker-right"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div><div class="colorpicker-selectors"></div></div>
