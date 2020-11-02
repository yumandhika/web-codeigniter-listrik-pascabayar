 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Tambah Saldo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard Tambah Saldo</a></li>
        <li class="active">Tambah Saldo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Saldo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form role="form" action="../updatesaldo" method="POST">
              <div class="box-body">
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">ID Saldo</label>
                  <input type="text" class="form-control" id="username_admin" name="id_saldo" value="<?php foreach($admin as $a){ echo $a->id_saldo;} ?>" placeholder="Enter email" readonly>
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Nama Admin ppob</label>
                  <input type="text" class="form-control" id="username_admin" name="nama" value="<?php foreach($admin as $a){ echo $a->nama_admin;} ?>" placeholder="Enter email" readonly>
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Tambah Saldo</label>
                  <input type="text" class="form-control" id="username_admin" name="tambahsaldo" value="0" placeholder="Enter email">
                  <input type="text" class="form-control" id="username_admin" name="saldoawal" value="<?php foreach($admin as $a){ echo $a->saldo;} ?>" placeholder="Enter email" style="visibility:hidden">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Tambah Saldo</button>
                <button type="submit" id="hapus" name="hapus" value="hapus" class="btn btn-danger">Kembali</button>
              </div>
            </form>


          </div>

    </section>
</div>