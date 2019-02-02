<?php
  $this->load->view('dosen/Header');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Menu
			<small>Detail Mahasiswa</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><a href="javascript:void(0);"><i class="fa fa-home"></i> </a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Data Dosen</h3>
				<div class="box-tools pull-right">
            <a href="<?php echo site_url();?>dosen/Dosen/tambahDataDosen" data-rel="collapse">
              <button type="button" class="btn btn-primary">
              <i class="glyphicon glyphicon-plus"></i>
              Tambah Data
              </button>
            </a>
					<button type="button" class="toggle-expand-btn btn btn-box-tool btn-sm">
						<i class="fa fa-expand"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="collapse">
						<i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<!-- <div class="nav-tabs-custom"> -->
		       <!-- <ul class="nav nav-tabs">
		          <li class="active"><a href="#tab_1" data-toggle="tab">Semua Data Dosen</a></li> -->
		          <!-- <li><a href="#tab_2" data-toggle="tab">Sebagai Penguji</a></li>
		          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
		        </ul> -->
		     <div class="tab-content">
		        <div class="tab-pane active" id="tab_1">
              <section class="content">
                <div class="row">
                  <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Dosen</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="<?php echo site_url();?>dosen/Dosen/simpanTambahDosen">
            <div class="box-body">
              <div class="form-group">
                <label for="inputNama" class="col-sm-2 control-label">NIM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNama" name='nim' placeholder="Nama Lengkap" required>
                </div>
              </div>
              <div class="form-group">
                <label for="nip" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nip" name='nama' placeholder="NIP">
                </div>
              </div>
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Dosen Pembimbing</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name='dospem' placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="role_dosen" class="col-sm-2 control-label">Kajian</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name='kajian' placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="role_dosen" class="col-sm-2 control-label">Tanggal Seminar</label>
                <div class="col-sm-10">
                  <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
              </div>
                <div class="form-group">
                  <label for="tglSeminar" class="col-sm-2 control-label">Waktu Seminar</label>
                  <div class="col-sm-10">
                    <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                   </div>
                  </div>
                <div class="form-group">
                  <label for="dosmod" class="col-sm-2 control-label">Dosen Moderator</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="dosmod" required>
                      <option value="">--Dosen Moderator--</option>
                      <option value="0">Walidatush Sholihah, SSi, MSi</option>
                      <option value="1">Aep Setiawan, SSi, MSi</option>
                    </select>
                  </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
                  <!-- /.col -->
                </div>
      <!-- /.row -->
              </section>
		        </div>
		  </div>
		            <!-- /.tab-content -->
		 <!-- </div> -->
	 </div>
			<!-- /.box-body -->
  </div>
		<!-- /.box -->
</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
  $(function () {
    $('#datetimepicker2').datetimepicker({
       minView: 2,
       pickDate: false,
       format: "dd MM yyyy"
    });
  });
</script>
<!-- <script type="text/javascript">
  $(function () {
    $('#datetimepicker3').datetimepicker({
      format: 'LT'
    });
});
</script> -->

</script>
<script>
  $(document).ready(function() {
  $('#tabel').DataTable();
} );
</script>
<script>
	/* jQueryKnob */
	$('.knob').knob();
</script>
<?php
  $this->load->view('dosen/Footer');
?>
