<?php
  $this->load->view('dosen/header');
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
				<h3 class="box-title">Samuel (J3D115011)</h3>
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
		          <li class="active"><a href="#tab_1" data-toggle="tab">Biodata Lengkap</a></li>
		          <li><a href="#tab_2" data-toggle="tab">Bidang Kajian</a></li>
		          <li><a href="#tab_3" data-toggle="tab">Seminar Tugas Akhir</a></li>
              <li><a href="#tab_4" data-toggle="tab">Ujian Tugas Akhir</a></li>
              <li><a href="#tab_5" data-toggle="tab">Kendali Bimbingan</a></li>
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
                    <?php foreach($detailmhs as $d){ ?>
                    <!-- <img class="profile-user-img img-responsive img-circle" src="<?php base_url();?>assets/images/photos/mahasiswadefault.jpg" alt="User profile picture"> -->
                    <h3 class="profile-username text-center"><?php echo $d->namaLengkap?></h3>
                    <p class="text-muted text-center"><?php echo $d->nim?></p>
                    <ul class="list-group list-group-unbordered">
                      <li class="list-group-item">
                        <b>Tanggal Masuk</b> <a class="pull-right"><?php echo $d->tanggalMasuk?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Kajian TA</b> <a class="pull-right">-</a>
                      </li>
                      <li class="list-group-item">
                        <b>Progres TA</b> <a class="pull-right">Pemilihan Kajian</a>
                      </li>
                    </ul>
                  </div>
            <!-- /.box-body -->
                </div>
          <!-- /.box -->
              </div>
        <!-- /.col -->
              <div class="col-md-9">
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#biodata" data-toggle="tab">Biodata Mahasiswa</a></li>
                    <li><a href="#prestasi" data-toggle="tab">Indeks Prestasi</a></li>
            <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
                  </ul>
                  <div class="tab-content">
                    <div class="active tab-pane" id="biodata">
              <!-- Post -->
                      <form class="form-horizontal">
                        <div class="col-sm-6 form-group">
                          <label for="inputName" class="col-sm-6 control-label">Nama Lengkap</label>
                          <div class="col-sm-6">
                            <h5><?php echo $d->namaLengkap?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Tempat/Tanggal Lahir</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->tempatLahir == ""){echo "-";}else {echo $d->tempatLahir?> , <?php echo $d->tanggalLahir;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Agama</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->agama == ""){echo "-";}else {echo $d->agama;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Kewarganegaraan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kewarganegaraan == ""){echo "-";}else {echo $d->kewarganegaraan;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Jenis Kelamin</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->jenisKelamin == ""){echo "-";}else {echo $d->jenisKelamin;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Tinggi Badan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->tinggi == ""){echo "-";}else {echo $d->tinggi;}?> Cm</h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Berat Badan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->berat == ""){echo "-";}else {echo $d->berat;}?> Kg</h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Golongan Darah</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->golonganDarah == ""){echo "-";}else {echo $d->golonganDarah;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Status Kawin</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->statusKawin == ""){echo "-";}else {echo $d->statusKawin;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Nama Ayah</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->namaAyah == ""){echo "-";}else {echo $d->namaAyah;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">NIK Ayah</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->nikAyah == ""){echo "-";}else {echo $d->nikAyah;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Nama Ibu</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->namaIbu == ""){echo "-";}else {echo $d->namaIbu;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">NIK Ibu</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->nikIbu == ""){echo "-";}else {echo $d->nikIbu;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Penghasilan Orang Tua</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->penghasilanParent == ""){echo "-";}else {echo $d->penghasilanParent;}?></h5>
                          </div>
                        </div>
                        <div class="col-sm-6 form-group">
                          <label for="inputName" class="col-sm-12 control-label">Alamat Berdasarkan Domisili</label>
                          <label for="inputName" class="col-sm-6 control-label">Alamat</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->alamatTinggal == ""){ echo "-";}else {echo $d->alamatTinggal;}?> RT/RW <?php if($d->rtrwTinggal == ""){ echo "-";}else {echo $d->rtrwTinggal;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Kelurahan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kelurahanTinggal == ""){echo "-";}else {echo $d->kelurahanTinggal;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Kecamatan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kecamatanTinggal == ""){echo "-";}else {echo $d->kecamatanTinggal;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Kota/Kabupaten</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kotaKabupatenTinggal == ""){echo "-";}else {echo $d->kotaKabupatenTinggal;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Kode Pos</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->posTinggal == ""){echo "-";}else {echo $d->posTinggal;}?></h5>
                          </div>
                          <label for="inputName" class="col-sm-12 control-label">Alamat Berdasarkan KTP</label>
                          <label for="inputName" class="col-sm-6 control-label">Alamat</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->alamatDomisili == ""){ echo "-";}else {echo $d->alamatDomisili;}?> RT/RW <?php if($d->rtrwDomisili == ""){ echo "-";}else {echo $d->rtrwDomisili;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Kelurahan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kelurahanDomisili == ""){echo "-";}else {echo $d->kelurahanDomisili;}?></h5>
                          </div>
                          <label for="inputEmail" class="col-sm-6 control-label">Kecamatan</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kecamatanDomisili == ""){echo "-";}else {echo $d->kecamatanDomisili;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Kota/Kabupaten</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->kotaKabupatenDomisili == ""){echo "-";}else {echo $d->kotaKabupatenDomisili;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Kode Pos</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->posDomisili == ""){echo "-";}else {echo $d->posDomisili;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Kontak</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->telepon == ""){echo "-";}else {echo $d->telepon;}?></h5>
                          </div>
                          <label for="inputEmail"class="col-sm-6 control-label">Email</label>
                          <div class="col-sm-6">
                            <h5><?php if($d->email == ""){echo "-";}else {echo $d->email;}?></h5>
                          </div>
                        </div>
                      </form>
              <!-- /.post -->
                    </div>
            <!-- /.tab-pane -->
                    <div class="tab-pane" id="prestasi">
              <!-- The timeline -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                          <tr>
                            <th>Semester</th>
                            <th>Indeks Prestasi</th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><?php if($d->ips1 == ""){echo "-";}else {echo $d->ips1;}?></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><?php if($d->ips2 == ""){echo "-";}else {echo $d->ips2;}?></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td><?php if($d->ips3 == ""){echo "-";}else {echo $d->ips3;}?></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td><?php if($d->ips4 == ""){echo "-";}else {echo $d->ips4;}?></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td><?php if($d->ips5 == ""){echo "-";}else {echo $d->ips5;}?></td>
                          </tr>
                        </table>
                        <?php } ?>
                      </div>
                    </div>
            <!-- /.tab-pane -->
            <!-- /.tab-pane -->
                </div>
          <!-- /.tab-content -->
              </div>
          <!-- /.nav-tabs-custom -->
            </div>
        <!-- /.col -->
          </div>
      <!-- /.row -->
        </section>
		 </div>
		              <!-- /.tab-pane -->
		<div class="tab-pane" id="tab_2">
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
            <!-- <div class="form-group"> -->
              <label>Data Pengajuan Kajian</label>
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Status Pemilihan Kajian</label>
                  <div class="col-sm-10">
                    <h5>Menunggu Verifikasi Panitia</h5>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Bidang Kajian dipilih</label>
                    <div class="col-sm-10">
                      <h5>Perangkat Keras</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Instansi</label>
                    <div class="col-sm-10">
                      <h5>PT. Kembali Maju</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alamat Instansi</label>
                    <div class="col-sm-10">
                      <h5>Jl. Ceremai 1 No. 5, Jakarta</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Pimpinan Instansi</label>
                    <div class="col-sm-10">
                      <h5>Dr. Joko Susilo</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nomor Kontak Instansi</label>
                    <div class="col-sm-10">
                      <h5>085647384755s</h5>
                    </div>
                  </div>
                </form>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="box box-primary">
            <!-- <div class="form-group"> -->
              <label>Data Instansi Pengajuan Lokasi PKL</label>
              <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Instansi</label>
                    <div class="col-sm-10">
                      <h5>PT. Kembali Maju</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Alamat Instansi</label>
                    <div class="col-sm-10">
                      <h5>Jl. Ceremai 1 No. 5, Jakarta</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Pimpinan Instansi</label>
                    <div class="col-sm-10">
                      <h5>Dr. Joko Susilo</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nomor Kontak Instansi</label>
                    <div class="col-sm-10">
                      <h5>08564738475</h5>
                    </div>
                  </div>
                </form>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <label>Dokumen Pengajuan Bidang Kajian dan PKL Terunggah (klik judul dokumen untuk unduh)</label>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Nama Dokumen</th>
              <th>Nomor Form/Surat</th>
            </tr>
            <tr>
              <td>
                <a href="<?php echo base_url();?>">
                  Usulan Minat Bidang Kajian dan Lokasi PKL
                </a>
              </td>
              <td>FRM/DPD/PKL/001</td>
            </tr>
            <tr>
              <td>
                <a href="<?php echo base_url();?>">
                  Surat Balasan Pengajuan Lokasi PKL dari Instansi
                </a>
              </td>
              <td>2018/SB/XXI</td>
            </tr>
          </table>
        </div>
        <!-- /.row -->
      </div>
		</div>
		              <!-- /.tab-pane -->
		<div class="tab-pane" id="tab_3">
      <section class="content">
      <div class="row">
  <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#jadwal" data-toggle="tab">Jadwal & Kelengkapan Syarat Seminar</a></li>
              <li><a href="#nilai" data-toggle="tab">Nilai Sebagai Penyaji</a></li>
              <li><a href="#nilaibahas" data-toggle="tab">Nilai Sebagai Pembahas</a></li>
              <li><a href="#kehadiran" data-toggle="tab">Kehadiran Seminar</a></li>
      <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="jadwal">
        <!-- Post -->
                <label>Jadwal Seminar</label>
                <div class="box box-primary">
          <!-- <div class="form-group"> -->
                  <form class="form-horizontal">
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Status Jadwal Seminar</label>
                    <div class="col-sm-10">
                      <h5>Belum Mengajukan Jadwal Seminar</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Hari/Tanggal Seminar</label>
                    <div class="col-sm-10">
                      <h5>-</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Jam Seminar</label>
                    <div class="col-sm-10">
                      <h5>-</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Ruangan Seminar</label>
                    <div class="col-sm-10">
                      <h5>-</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Moderator Seminar</label>
                    <div class="col-sm-10">
                      <h5>-</h5>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  for="inputName" class="col-sm-2 control-label">Pembahas Seminar/NIM</label>
                    <div class="col-sm-10">
                      <h5>-</h5>
                    </div>
                  </div>
                </form>
              </div>
              <label>Dokumen Syarat Seminar</label>
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Nama Dokumen</th>
                    <th>Nomor Form/Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <td>
                      Form Pendaftaran Seminar
                    </td>
                    <td>-</td>
                    <td>Sudah Unggah</td>
                    <td>
                      <button>
                        <a href="<?php echo base_url();?>">
                        Unduh
                        </a>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Form Persetujuan Seminar
                    </td>
                    <td>FRM/DPD/PKL/018</td>
                    <td>Sudah Unggah</td>
                    <td>
                      <button>
                        <a href="<?php echo base_url();?>">
                        Unduh
                        </a>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Form Berita Acara Seminar
                    </td>
                    <td>FRM/DPD/PKL/019</td>
                    <td>Sudah Unggah</td>
                    <td>
                      <button>
                        <a href="<?php echo base_url();?>">
                        Unduh
                        </a>
                      </button>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
      <!-- /.tab-pane -->
              <div class="tab-pane" id="nilai">
        <!-- The timeline -->
                <div class="box-body table-responsive no-padding">
                  <button>Masukkan Nilai</button>
                  <table class="table table-hover">
                    <tr>
                      <th>Aspek</th>
                      <th>Bobot</th>
                      <th>Nilai</th>
                      <th>Bobot x Nilai</th>
                    </tr>
                    <tr>
                      <td>Format dan substansi makalah</td>
                      <td>30%</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td>Penyajian makalah</td>
                      <td>30%</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td>Argumentasi dalam forum diskusi</td>
                      <td>40%</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td>Total</td>
                      <td>100%</td>
                      <td colspan=2>-</td>
                    </tr>
                  </table>
                </div>
                <label>Dokumen Form Nilai Seminar</label>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nama Dokumen</th>
                      <th>Nomor Form/Surat</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                    <tr>
                      <td>
                        Form Pendaftaran Seminar
                      </td>
                      <td>-</td>
                      <td>Sudah Unggah</td>
                      <td>
                        <button>
                          <a href="<?php echo base_url();?>">
                          Unduh
                          </a>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Form Persetujuan Seminar
                      </td>
                      <td>FRM/DPD/PKL/018</td>
                      <td>Sudah Unggah</td>
                      <td>
                        <button>
                          <a href="<?php echo base_url();?>">
                          Unduh
                          </a>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Form Berita Acara Seminar
                      </td>
                      <td>FRM/DPD/PKL/019</td>
                      <td>Sudah Unggah</td>
                      <td>
                        <button>
                          <a href="<?php echo base_url();?>">
                          Unduh
                          </a>
                        </button>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="active tab-pane" id="nilaibahas">
        <!-- Post -->
                <label>Nilai Sebagai Pembahas</label>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nama Penyaji</th>
                      <th>NIM Penyaji</th>
                      <th>Tanggal Seminar</th>
                      <th>Waktu</th>
                      <th>Nilai</th>
                    </tr>
                    <tr>
                      <td>Budi</td>
                      <td>J3D115060</td>
                      <td>22 Januari 2019</td>
                      <td>10.00</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>Susi</td>
                      <td>J3D115051</td>
                      <td>22 Januari 2019</td>
                      <td>13.00</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td colspan=4>Rata-rata Nilai</td>
                      <td>80</td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>
    <!-- /.tab-content -->
        </div>
    <!-- /.nav-tabs-custom -->
      </div>
  <!-- /.col -->
    </div>
<!-- /.row -->
  </section>
		</div>
		              <!-- /.tab-pane -->
  </div>
		            <!-- /.tab-content -->
</div>
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
	/* jQueryKnob */
	$('.knob').knob();
</script>
<?php
  $this->load->view('dosen/footer');
?>
