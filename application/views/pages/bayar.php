 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Bayar langsung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pelanggan"><i class="fa fa-users"></i> Home</a></li>
        <li><a href="admin">Dashboard bayar langsung</a></li>
        <li class="active">Bayar langsung</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Bayar langsung</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="bayar/payment" method="get">
              <div class="box-body">
                <div class="form-group crud-admin" style="width:300px">
                  <label for="exampleInputEmail1">Nomor Kwh</label>
                  <input type="id" class="form-control" id="nomor_kwh" name="nomor_kwh" placeholder="nomor kwh">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Confirm</button>
              </div>
            </form>
          </div>

    </section>
</div>