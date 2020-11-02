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
        <li class="active">Edit Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form role="form" action="../update" method="POST">
              <div class="box-body">
              <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">ID Admin</label>
                  <input type="id" class="form-control" id="id_admin" value="<?php echo $admin[0]['id_admin'] ?>" name="id_admin" placeholder="Enter email" readonly>
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Username admin</label>
                  <input type="text" class="form-control" id="username_admin" name="username" value="<?php echo $admin[0]['username'] ?>" placeholder="Enter email">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputPassword1">Password admin</label>
                  <input type="password" class="form-control" id="password_admin" name="password" value="<?php echo $admin[0]['password'] ?>" placeholder="Password">
                </div>
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputPassword1">Nama admin</label>
                  <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="<?php echo $admin[0]['nama_admin'] ?>" placeholder="nama admin">
                </div>
                
                <div class="form-group crud-admin" style="width:300px">
                  <label>Select Level Admin</label>
                  <select id="id_level" name="id_level" class="form-control">
                    <option value="1" <?php $admin[0]['id_level'] == 1 ? 'selected' : '' ?>>Admin Listrik PascaBayar</option>
                    <option value="2" <?php $admin[0]['id_level'] == 2 ? 'selected' : '' ?>>Admin Bank</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" id="hapus" name="hapus" value="hapus" class="btn btn-danger">Hapus Admin</button>
              </div>
            </form>


          </div>

    </section>
</div>