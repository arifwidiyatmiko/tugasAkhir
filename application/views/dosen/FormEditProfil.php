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
            <h3 class="box-title">Edit Data Dosen</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="<?php echo site_url();?>dosen/Dosen/simpanUbahProfil">
            <?php foreach($detaildosen as $d){ ?>
            <div class="box-body">
              <input type="hidden" class="form-control" id="inputNama" value="<?php echo $d->id; ?>" name='id' required>
              <div class="form-group">
                <label for="inputNama" class="col-sm-2 control-label">Nama Lengkap Dosen</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNama" value="<?php echo $d->nama; ?>" name='nama_dosen' placeholder="Nama Lengkap" required>
                </div>
              </div>
              <div class="form-group">
                <label for="nip" class="col-sm-2 control-label">NIP/NIDN</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nip" value="<?php echo $d->nip; ?>" name='nip_dosen' placeholder="NIP">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" value="<?php echo $d->email; ?>" name='email_dosen' placeholder="Email" required>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" value="<?php echo $d->username; ?>" name='username_dosen' placeholder="Username" required>
                </div>
              </div> -->
              <!-- <div class="form-group">
                <label for="role_dosen" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <select class="form-control" name="status" required>
                    <option value="value="<?php echo $d->isAdmin; ?>"">
                      <?php
                      if($d->isAdmin == '0'){echo 'NON PANITIA';}
                      else{ echo 'PANITIA';} ?>
                    </option>
                    <option value="0">NON PANITIA</option>
                    <option value="1">PANITIA</option>
                  </select>
                </div>
              </div> -->
            </div>
          <?php } ?>
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
		  <!-- /.tab-pane -->
		        <!-- <div class="tab-pane" id="tab_2">
		                The European languages are members of the same family. Their separate existence is a myth.
		                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
		                in their grammar, their pronunciation and their most common words. Everyone realizes why a
		                new common language would be desirable: one could refuse to pay expensive translators. To
		                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
		                words. If several languages coalesce, the grammar of the resulting language is more simple
		                and regular than that of the individual languages.
		         </div> -->
		              <!-- /.tab-pane -->
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

<script>
	var columns = [];
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
