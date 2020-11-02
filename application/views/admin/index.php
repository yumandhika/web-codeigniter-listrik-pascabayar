 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard Admin</a></li>
        <li class="active"> Tambah Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="create" method="POST">
              <div class="box-body">
              <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">ID Admin</label>
                  <input type="id" class="form-control" id="id_admin" value="<?php echo $x ?>" name="id_admin" placeholder="Enter email" readonly>
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Username admin</label>
                  <input type="text" class="form-control" id="username_admin" name="username" value="" placeholder="Enter email">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputPassword1">Password admin</label>
                  <input type="password" class="form-control" id="password_admin" name="password" value="" placeholder="Password">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputPassword1">Nama admin</label>
                  <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="" placeholder="nama admin">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label>Select Level Admin</label>
                  <select id="id_level" name="id_level" class="form-control">
                    <option value="1">Admin Listrik PascaBayar</option>
                    <option value="2">Admin Bank</option>
                    <option value="3">Admin PPOB</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>

    </section>
</div>