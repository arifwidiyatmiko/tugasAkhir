<?php
  $this->load->view('dosen/header');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Menu
			<small>Detail Instansi</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><a href="javascript:void(0);"><i class="fa fa-home"></i> </a></li>
		</ol>
	</section>
  <?php foreach($detailInstansi as $d){ ?>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo $d->namaInstansi?></h3>
				<div class="box-tools pull-right">
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
				<div class="nav-tabs-custom">
		       <ul class="nav nav-tabs">
		          <li class="active"><a href="#tab_1" data-toggle="tab">Data Instansi</a></li>
		          <li><a href="#tab_2" data-toggle="tab">Data Mahasiswa PKL</a></li>
		          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
		        </ul>
		        <div class="tab-content">
		        <div class="tab-pane active" id="tab_1">
            <section class="content">
            <div class="row">
              <div class="col-md-3">
          <!-- Profile Image -->
                <div class="box box-primary">
                  <div class="box-body box-profile">
                    <!-- <img class="profile-user-img img-responsive img-circle" src="<?php base_url();?>assets/images/photos/mahasiswadefault.jpg" alt="User profile picture"> -->
                    <h3 class="profile-username text-center"><?php echo $d->namaInstansi?></h3>
                    <!-- <p class="text-muted text-center"><?php echo $d->nim?></p> -->
                    <!-- <ul class="list-group list-group-unbordered">
                      <li class="list-group-item">
                        <b>Tanggal Masuk</b> <a class="pull-right"><?php echo $d->tanggalMasuk?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Kajian TA</b> <a class="pull-right">-</a>
                      </li>
                      <li class="list-group-item">
                        <b>Progres TA</b> <a class="pull-right">Pemilihan Kajian</a>
                      </li>
                    </ul> -->
                  </div>
            <!-- /.box-body -->
                </div>
          <!-- /.box -->
              </div>
        <!-- /.col -->
              <div class="col-md-9">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#biodata" data-toggle="tab">Data Instansi</a></li>
                    <!-- <li><a href="#prestasi" data-toggle="tab">Indeks Prestasi</a></li> -->
            <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
                  </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="biodata">
              <!-- Post -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="box box-primary">
                            <form class="form-horizontal">
                        <!-- <div class="col-md-6"> -->
                            <label for="inputName" class="col-sm-6 control-label">Nama Instansi</label>
                            <div class="col-sm-6">
                              <h5><?php echo $d->namaInstansi?></h5>
                            </div>
                            <label for="inputEmail" class="col-sm-6 control-label">Nama Pimpinan</label>
                            <div class="col-sm-6">
                              <h5><?php if($d->pimpinanInstansi == ""){echo "-";}else {echo $d->pimpinanInstansi;}?></h5>
                            </div>
                            <label for="inputEmail" class="col-sm-6 control-label">Email</label>
                            <div class="col-sm-6">
                              <h5><?php if($d->emailInstansi == ""){echo "-";}else {echo $d->emailInstansi;}?></h5>
                            </div>
                            <label for="inputEmail"class="col-sm-6 control-label">Kontak</label>
                            <div class="col-sm-6">
                              <h5><?php if($d->kontakInstansi == ""){echo "-";}else {echo $d->kontakInstansi;}?></h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="box box-primary">
                            <form class="form-horizontal">
                              <label for="inputName" class="col-sm-12 control-label">Alamat Instansi</label>
                              <label for="inputName" class="col-sm-6 control-label">Alamat</label>
                              <div class="col-sm-6">
                                <h5><?php if($d->alamatInstansi == ""){ echo "-";}else {echo $d->alamatInstansi;}?></h5>
                              </div>
                              <label for="inputEmail" class="col-sm-6 control-label">Kelurahan</label>
                              <div class="col-sm-6">
                                <h5><?php if($d->kelurahanInstansi == ""){echo "-";}else {echo $d->kelurahanInstansi;}?></h5>
                              </div>
                              <label for="inputEmail" class="col-sm-6 control-label">Kecamatan</label>
                              <div class="col-sm-6">
                                <h5><?php if($d->kecamatanInstansi == ""){echo "-";}else {echo $d->kecamatanInstansi;}?></h5>
                              </div>
                              <label for="inputEmail"class="col-sm-6 control-label">Kota/Kabupaten</label>
                              <div class="col-sm-6">
                                <h5><?php if($d->kotaKabInstansi == ""){echo "-";}else {echo $d->kotaKabInstansi;}?></h5>
                              </div>
                            </div>
                          </form>
                      <?php } ?>
                              </div>
                            </div>
              <!-- /.post -->
                          </div>
            <!-- /.tab-pane -->
                        </div>
          <!-- /.tab-content -->
                      </div>
          <!-- /.nav-tabs-custom -->
                    </div>
        <!-- /.col -->
                  </div>
                </div>
              <!-- </div> -->
      <!-- /.row -->
            </section>
          </div>
		              <!-- /.tab-pane -->
		      <div class="tab-pane" id="tab_2">
            <div class="box-body">
              <div class="row">
                <table class="table table-hover">
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kajian</th>
                    <th>Pembimbing Lapangan</th>
                  </tr>
                  <tr>
                    <td>Arif</td>
                    <td>J3C113025</td>
                    <td>Multimedia</td>
                    <td>Deny</td>
                  </tr>
                </table>
          <!-- /.col -->
              </div>
        <!-- /.row -->
            </div>
		      </div>
        </div>
      </div>
    </div>
  </div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
	var columns = [];
</script>
<script>
	/* jQueryKnob */
	$('.knob').knob();
</script>
<?php
  $this->load->view('dosen/footer');
?>
