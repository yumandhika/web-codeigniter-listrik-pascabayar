 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Payment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard Payment</a></li>
        <li class="active">Payment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Payment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form role="form" action="../../pembayaran/update" method="POST">
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <h1>Data Pelanggan</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['nama_pelanggan']?>" class="form-control" placeholder="Enter ..." readonly>
                                <input type="text" name="id_pelanggan" value="<?php echo $tagihanbayar[0]['id_pelanggan']?>" class="form-control" placeholder="Enter ..." readonly style="position:absolute;visibility:hidden;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Nomor Kwh Pelanggan</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['nomor_kwh']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>daya</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['daya']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Tarif/kwh</label>
                                <input type="text" value="Rp.<?php echo number_format($tagihanbayar[0]['tarifperkwh'],0,',',',')?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['alamat']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <h1>Data Penggunaan</h1>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['bulan']?>" class="form-control" placeholder="Enter ..." readonly>
                                <input type="text" name="id_tagihan" value="<?php echo $tagihanbayar[0]['id_tagihan']?>" class="form-control" placeholder="Enter ..." readonly style="position:absolute;visibility:hidden;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Meter Awal</label>
                                <input type="text" name="meter_awal" value="<?php echo $tagihanbayar[0]['meter_awal']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Meter Akhir</label>
                                <input type="text" name="meter_akhir" value="<?php echo $tagihanbayar[0]['meter_akhir']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Jumlah meter</label>
                                <input type="text" value="<?php echo $tagihanbayar[0]['jumlah_meter']?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                            <h1>Data Pembayaran</h1>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Tanggal Sekarang</label>
                                <input type="text" name="tanggal" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="Enter ..." readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Biaya Admin</label>
                                <input type="text" name="biaya_admin_Buaya" value="Rp.2,500" class="form-control" placeholder="Enter ..." readonly>
                                <input type="text" name="biaya_admin" value="2500" class="form-control" placeholder="Enter ..." readonly style="visibility:hidden">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Total Pembayaran</label>
                                <input type="text" name="total" value="Rp.<?php echo number_format(intval($tagihanbayar[0]['jumlah_meter'])*intval($tagihanbayar[0]['tarifperkwh'])+2500,0,",",",")?>" class="form-control" placeholder="Enter ..." readonly>
                                <input type="text" name="total_bayar" value="<?php echo intval($tagihanbayar[0]['jumlah_meter'])*intval($tagihanbayar[0]['tarifperkwh'])+2500?>" class="form-control" placeholder="Enter ..." style="visibility:hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="text" name="id_admin" value="<?php echo $id_admin?>" class="form-control" placeholder="Enter ..." readonly style="position:absolute;visibility:hidden;">                 
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;">Konfirmasi Pembayaran</button>
              </div>
            </form>


          </div>

    </section>
</div>

<div class="colorpicker dropdown-menu colorpicker-hidden colorpicker-with-alpha colorpicker-right"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div><div class="colorpicker-selectors"></div></div>
