 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Tarif</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard Tarif</a></li>
        <li class="active">Edit Tarif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tarif</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form role="form" action="../update" method="POST">
                <div class="box-body">
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">ID Tarif</label>
                  <input type="id" class="form-control" id="id_admin" value="<?php echo $tarif[0]['id_tarif'] ?>" name="id_tarif" placeholder="Enter email" readonly>
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Daya</label>
                  <input type="text" class="form-control" id="username_admin" name="daya" value="<?php echo $tarif[0]['daya'] ?>" placeholder="Daya">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputPassword1">Tarif per kwh</label>
                  <input type="text" class="form-control" id="password_admin" name="tarifperkwh" value="<?php echo $tarif[0]['tarifperkwh'] ?>" placeholder="tarif per kwh">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" id="hapus" name="hapus" value="hapus" class="btn btn-danger">Hapus Tarif</button>
              </div>
            </form>


          </div>

    </section>
</div>