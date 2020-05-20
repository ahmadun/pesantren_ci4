 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pendaftaran Santri
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Biodata Santri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form id="form-biodata">
            <!-- <form action="<?php echo base_url('data_santri/store_santri'); ?>" method="POST" id="form-biodata"> -->
              <div class="box-body">

              <div class="row">
                <div class="form-group col-lg-2">
                  <label for="no-induk">No Induk Santri</label>
                  <input type="text" class="form-control" id="no-induk" name="no-induk" placeholder="No Induk">
                </div>
              </div>

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>

             <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="gender" style="width: 100%;">
                  <option selected="selected" value="Laki-Laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

            <div class="row">
              <div class="form-group col-lg-4">
                  <label for="exampleInputPassword1">Tempat Lahir</label>              
                  <input type="text" class="form-control " id="exampleInputPassword1" name="tempat-lahir" placeholder="Tempat Lahir">
             </div>

            <div class="form-group col-lg-8">
              <label>Tanggal Lahir:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="tanggal-lahir" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
            </div>

            <div class="form-group">
                <label>Agama</label>
                <select class="form-control select2" name="agama" style="width: 100%;">
                  <option selected="selected">Islam</option>
                  <option>Kristen</option>
                </select>
              </div>
              
              <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Lengkap ..."></textarea>
                </div>

              </div>
              <div class="box-footer">
                <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button>
              </div>
            </form>
          </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?= $this->include('templates\footer') ?>

<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/select2.full.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/jquery.slimscroll.min.js"></script>
<script>
  $(function () {
    $('.select2').select2()
       //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

  $('#btn-simpan').click(function(){ 
    $.ajax({
      url: '<?php echo base_url()?>/data_santri/store_santri',
      type: "post",
      data: $("#form-biodata").serialize(),
      dataType: 'json',
      success: function(data){ 
        console.log(data)
      },
      error: function (xhr, ajaxOptions, thrownError) { 
        alert(xhr.responseText) 
      }
    })
  })
</script>
</body>
</html>