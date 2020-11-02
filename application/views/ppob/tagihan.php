


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>penggunaan pelanggan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Home</a></li>
        <li class="active">Dashboard penggunaan pelanggan</li>
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
              <h3 class="box-title">Data penggunaan pelanggan</h3>
              <br>
              <br>
              <div style="float:right"> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="masukan nomor kwh"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              <div class="col-sm-12">
              <table id="myTable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20%;">Nama Pelanggan</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 15%;">Nomor kwh</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 15%;">Bulan</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 15%;">Tahun</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 15%;">Jumlah Meter</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">Tagihan</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10%;">Status</th>
                </thead>
                <tbody>          
                <?php foreach($tagihans as $tagihan){?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $tagihan->nama_pelanggan?></td>
                  <td><?php echo $tagihan->nomor_kwh?></td>
                  <td><?php echo date("M",strtotime($tagihan->bulan))?></td>
                  <td><?php echo date("Y",strtotime($tagihan->tahun))?></td>
                  <td><?php echo $tagihan->jumlah_meter?> kwh</td>
                  <td>Rp.<?php echo number_format(intval($tagihan->jumlah_meter)*intval($tagihan->tarifperkwh),0,',',',')?></td>
                  <td><a href="<?php if($tagihan->status=="sudah bayar"){echo "#";}elseif($tagihan->status=="belum bayar"){foreach($this->session->userdata('adminSession') as $a){if($a->saldo > intval($tagihan->jumlah_meter)*intval($tagihan->tarifperkwh)){echo "../ppob/bayar/".$tagihan->id_tagihan;}else{echo "#";}}}?>">
                  <button type="button" class="btn btn-block <?php if($tagihan->status=="sudah bayar"){echo "btn-success";}elseif($tagihan->status=="belum bayar"){echo "btn-danger";}else{echo "btn-warning";}?>"><?php 
                  foreach($this->session->userdata('adminSession') as $a){if($a->saldo > intval($tagihan->jumlah_meter)*intval($tagihan->tarifperkwh) || $tagihan->status=="sudah bayar"){
                      echo $tagihan->status;
                  }else{
                      echo "Saldo anda kurang";
                  }}
                  ?></button></a></td>
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
  <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>