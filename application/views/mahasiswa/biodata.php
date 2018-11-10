

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Biodata
			<small>Mahasiswa</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><a href="javascript:void(0);"><i class="fa fa-home"></i> Beranda</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Biodata</h3>
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
					<form action="http://localhost/data/Welcome/submit" method="POST">
      	<div class="form-group">
			<label for="exampleInputEmail1">Nama Lengkap</label>
		    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="" placeholder="Nama Lengkap">
		 </div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Tempat Lahir</label>
			    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="" placeholder="Tempat Lahir">
			</div>
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Tanggal Lahir</label>
				<input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir"  placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Nomor Hp Aktif</label>
			    <input type="number" class="form-control" id="telepon" name="telepon" value="" placeholder="08..." onkeypress="return isNumber(event)">
			</div>
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">NIK</label>
			    <input type="number" class="form-control" id="NIK" name="NIK" value="213123343543534"  onkeypress="return isNumber(event)">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Jenis Kelamin</label>
			    <div class="radio">
				  <label>
				    <input type="radio" name="jenisKelamin" id="jenisKelamin" value="L" >
				    Laki Laki
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="jenisKelamin" id="jenisKelamin" value="P" >
				    Perempuan
				  </label>
				</div>
			</div>
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Jalur Masuk</label>
			    <select name="jalurMasuk" class="form-control" id="jalurMasuk">
			    	<option disabled>---Pilih ---</option>
			    	<option value="USMI/SNMPTN Undangan/SNMPTN" >USMI/SNMPTN Undangan/SNMPTN</option>
			    	<option value="REGULER/SBMPTN/Ujian Tulis" >REGULER/SBMPTN/Ujian Tulis</option>
			    	<option value="BUD/Beasiswa/Kemitraan/Jalur Kerjasama" >BUD/Beasiswa/Kemitraan/Jalur Kerjasama</option>
			    </select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Nama Ibu Kandung</label>
			    <input type="text" class="form-control" id="ibuKandung" name="ibuKandung" value="" placeholder="Nama Lengkap Ibu Kandung">
			</div>
			<div class="col-sm-6 form-group">
				<label for="exampleInputEmail1">Tanggal Masuk</label>
				<input type="text" class="form-control" id="tanggalMasuk" name="tanggalMasuk"  placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Program Studi</label>
		    <select name="programStudi" id="programStudi" class="form-control">
		    	<option disabled>-- Pilih --</option>
		    	<option value="KOMUNIKASI" >KOMUNIKASI</option><option value="EKOWISATA" >EKOWISATA</option><option value="MANAJEMEN INFORMATIKA" >MANAJEMEN INFORMATIKA</option><option value="TEKNIK KOMPUTER" >TEKNIK KOMPUTER</option><option value="SUPERVISOR JAMINAN MUTU PANGAN" >SUPERVISOR JAMINAN MUTU PANGAN</option><option value="MANAJEMEN INDUSTRI JASA MAKANAN DAN GIZI" >MANAJEMEN INDUSTRI JASA MAKANAN DAN GIZI</option><option value="TEKNOLOGI INDUSTRI BENIH" >TEKNOLOGI INDUSTRI BENIH</option><option value="TEKNOLOGI DAN MANAJEMEN TERNAK" >TEKNOLOGI DAN MANAJEMEN TERNAK</option><option value="MANAJEMEN AGRIBISNIS" >MANAJEMEN AGRIBISNIS</option><option value="MANAJEMEN INDUSTRI" >MANAJEMEN INDUSTRI</option><option value="ANALISIS KIMIA" >ANALISIS KIMIA</option><option value="TEKNIK DAN MANAJEMEN LINGKUNGAN" >TEKNIK DAN MANAJEMEN LINGKUNGAN</option><option value="PARAMEDIK VETERINER" >PARAMEDIK VETERINER</option><option value="TEKNOLOGI DAN MANAJEMEN INDUSTRI PERTANIAN" >TEKNOLOGI DAN MANAJEMEN INDUSTRI PERTANIAN</option><option value="PERKEBUNAN KELAPA SAWIT" >PERKEBUNAN KELAPA SAWIT</option><option value="TEKNOLOGI PRODUKSI DAN PENGEMBANGAN MASYARAKAT PERTANIAN" >TEKNOLOGI PRODUKSI DAN PENGEMBANGAN MASYARAKAT PERTANIAN</option><option value="TEKNOLOGI PRODUKSI DAN MANAJEMEN PERIKANAN BUDIDAYA" >TEKNOLOGI PRODUKSI DAN MANAJEMEN PERIKANAN BUDIDAYA</option><option value="AKUNTANSI" >AKUNTANSI</option><option value="TEKNOLOGI DAN MANAJEMEN PRODUKSI PERKEBUNAN" >TEKNOLOGI DAN MANAJEMEN PRODUKSI PERKEBUNAN</option>		    </select>
		 </div>
		<div class="row">
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Batas Waktu Studi</label>
			    <input type="number" size="4" class="form-control" id="batasStudi" onkeypress="return isNumber(event)" name="batasStudi" value="2023" placeholder="Tempat Lahir">
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Tinggi Badan</label>
				<div class="input-group">
     				 
			    <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" id="tinggi" name="tinggi" value="0" placeholder="Tinggi Badan">
			    	<div class="input-group-addon">Cm</div>
				</div>
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Berat Badan</label>
				<div class="input-group">
			    <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" id="berat" name="berat" value="0" placeholder="Berat Badan">
			    	<div class="input-group-addon">Kg</div>
			    </div>
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Penghasilan OrangTua</label>
			    <select name="penghasilanParent" id="penghasilanParent" class="form-control">
			    	<option value="< 500.000" >< Rp.500.000</option>
			    	<option value="500.000-1.500.000" >Rp.500.000-Rp.1.500.000</option>
			    	<option value="1500.000-3000.000" >Rp.1500.000-Rp.3000.000</option>
			    	<option value="> 3000.000" > > Rp. 3000.000</option>
			    </select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Kewarganegaraan</label>
			    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
			    	<option >WNI</option>
			    	<option >WNA</option>
			    </select>
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Golongan Darah</label>
			    <select name="golonganDarah" id="golonganDarah" class="form-control">
			    	<option >A</option>
			    	<option >B</option>
			    	<option >O</option>
			    	<option >AB</option>
			    </select>
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Status Perkawinan</label>
			    <select name="statusKawin" id="statusKawin" class="form-control">
			    	<option >Menikah</option>
			    	<option >Belum Menikah</option>
			    	<option >Janda</option>
			    	<option >Duda</option>
			    </select>
			</div>
			<div class="col-sm-3 form-group">
				<label for="exampleInputEmail1">Agama</label>
			    <input type="text" class="form-control" id="agama" name="agama" value="" placeholder="islam/protestan/katolik/hindu/buddha">
			</div>
		</div>
		<h3><b>Alamat Tempat Tinggal</b></h3><hr>
		<div class="row">
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kota/ Kabupaten</label>
			    <input type="text" class="form-control" id="kotaKabupatenTinggal" name="kotaKabupatenTinggal" value="" placeholder="Kota Kabupaten">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kecamatan</label>
			    <input type="text" class="form-control" id="kecamatanTinggal" name="kecamatanTinggal" value="" placeholder="Kecamatan">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kelurahan</label>
			    <input type="text" class="form-control" id="kelurahanTinggal" name="kelurahanTinggal" value="" placeholder="Keluruhan">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat Jalan</label>
		    <input type="text" class="form-control" id="alamatTinggal" name="alamatTinggal" value="" placeholder="Alamat">
		 </div>
		 <div class="row">
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kode Pos</label>
			    <input type="number" class="form-control" id="kodepos" name="kodepos" value="" placeholder="Kode Pos" onkeypress="return isNumber(event)">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Nomor RT</label>
			    <input type="number" class="form-control" id="rt" name="rt" value="" placeholder="RT" onkeypress="return isNumber(event)">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Nomor RW</label>
			    <input type="number" class="form-control" id="rw" name="rw" value="" placeholder="RW" onkeypress="return isNumber(event)">
			</div>
		</div>
		<h3><b>Alamat Domisili/Asal</b></h3><hr>
		<div class="row">
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kota/ Kabupaten</label>
			    <input type="text" class="form-control" id="kotaKabupatenDomisili" name="kotaKabupatenDomisili" value="" placeholder="Kota Kabupaten">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kecamatan</label>
			    <input type="text" class="form-control" id="kecamatanDomisili" name="kecamatanDomisili" value="" placeholder="Kecamatan">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kelurahan</label>
			    <input type="text" class="form-control" id="kelurahanDomisili" name="kelurahanDomisili" value="" placeholder="Keluruhan">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat Jalan</label>
		    <input type="text" class="form-control" id="alamatTinggal" name="alamatDomisili" value="" placeholder="Alamat">
		 </div>
		 <div class="row">
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Kode Pos</label>
			    <input type="number" class="form-control" id="posDomisili" name="posDomisili" value="" placeholder="Kode Pos" onkeypress="return isNumber(event)">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Nomor RT</label>
			    <input type="number" class="form-control" id="rtDomisili" name="rtDomisili" value="" placeholder="RT" onkeypress="return isNumber(event)">
			</div>
			<div class="col-sm-4 form-group">
				<label for="exampleInputEmail1">Nomor RW</label>
			    <input type="number" class="form-control" id="rwDomisili" name="rwDomisili" value="" placeholder="RW" onkeypress="return isNumber(event)">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-primary" value="Simpan">
		</div>
      </form>
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