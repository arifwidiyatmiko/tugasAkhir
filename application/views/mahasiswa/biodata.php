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
   <script type="text/javascript">
       function isNumber(evt) {
                                    evt = (evt) ? evt : window.event;
                                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                                        return false;
                                    }
                                    return true;
                                }
</script>
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
            <form action="<?=base_url()?>/Welcome/submit" method="POST">
               <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="<?=$this->session->userdata('mahasiswa')->namaLengkap?>" placeholder="Nama Lengkap">
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Tempat Lahir</label>
                     <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?=$this->session->userdata('mahasiswa')->tempatLahir?>" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Tanggal Lahir</label>
                     <!-- <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir"   placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)"> -->
                     <?php 
                        if ($this->session->userdata('mahasiswa')->tanggalLahir == NULL) {
                        ?>
                     <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir"  placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)" required>
                     <?php
                        }else{
                        ?>
                     <input type="text" class="form-control" id="tanggalLahir" name="tanggalLahir" value="<?= substr($this->session->userdata('mahasiswa')->tanggalLahir, 8,2)."/".substr($this->session->userdata('mahasiswa')->tanggalLahir, 5,2)."/".substr($this->session->userdata('mahasiswa')->tanggalLahir, 0,4); ?>" placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)" required>
                     <?php
                        }
                        ?>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Nomor Hp Aktif</label>
                     <input type="number" class="form-control" id="telepon" name="telepon" value="<?=$this->session->userdata('mahasiswa')->telepon?>" placeholder="08..." onkeypress="return isNumber(event)" required>
                  </div>
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">NIK</label>
                     <input type="number" class="form-control" id="NIK" name="NIK" value="<?=$this->session->userdata('mahasiswa')->NIK?>"  onkeypress="return isNumber(event)" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Jenis Kelamin</label>
                     <div class="radio">
                        <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="L" <?php if($this->session->userdata('mahasiswa')->jenisKelamin == 'L'){echo "checked";}?> required>
                        Laki Laki
                        </label>
                     </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="P" <?php if($this->session->userdata('mahasiswa')->jenisKelamin == 'P'){echo "checked";}?> required>
                        Perempuan
                        </label>
                     </div>
                  </div>
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Jalur Masuk</label>
                     <select name="jalurMasuk" class="form-control" id="jalurMasuk" required>
                        <option disabled>---Pilih ---</option>
                        <option value="USMI/SNMPTN Undangan/SNMPTN" <?php if($this->session->userdata('mahasiswa')->jalurMasuk == 'USMI/SNMPTN Undangan/SNMPTN'){echo "selected";}?> >USMI/SNMPTN Undangan/SNMPTN</option>
                        <option value="REGULER/SBMPTN/Ujian Tulis" <?php if($this->session->userdata('mahasiswa')->jalurMasuk == 'REGULER/SBMPTN/Ujian Tulis'){echo "selected";}?> >REGULER/SBMPTN/Ujian Tulis</option>
                        <option value="BUD/Beasiswa/Kemitraan/Jalur Kerjasama" <?php if($this->session->userdata('mahasiswa')->jalurMasuk == 'BUD/Beasiswa/Kemitraan/Jalur Kerjasama'){echo "selected";}?> >BUD/Beasiswa/Kemitraan/Jalur Kerjasama</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                     <input type="text" class="form-control" id="ibuKandung" name="ibuKandung" value="<?=$this->session->userdata('mahasiswa')->ibuKandung?>" value="" placeholder="Nama Lengkap Ibu Kandung" required>
                  </div>
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Tanggal Masuk</label>
                     <?php 
                        if ($this->session->userdata('mahasiswa')->tanggalMasuk == NULL) {
                        ?>
                     <input type="text" class="form-control" id="tanggalMasuk" name="tanggalMasuk"  placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)">
                     <?php
                        }else{
                        ?>
                     <input type="text" class="form-control" id="tanggalMasuk" name="tanggalMasuk" value="<?= substr($this->session->userdata('mahasiswa')->tanggalMasuk, 8,2)."/".substr($this->session->userdata('mahasiswa')->tanggalMasuk, 5,2)."/".substr($this->session->userdata('mahasiswa')->tanggalMasuk, 0,4); ?>" placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)">
                     <?php
                        }
                        ?>
                     <!-- <input type="text" class="form-control" id="tanggalMasuk" name="tanggalMasuk"  placeholder="Tanggal/bulan/Tahun (dd/mm/yyyy)"> -->
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Program Studi</label>
                     <select name="programStudi" id="programStudi" class="form-control" required>
                        <option disabled>-- Pilih --</option>
                        <?php 
                           // print_r($pk);
                           foreach ($pk as $key=>$value) {
                           	?>
                        <option value="<?php echo $value;?>" <?php if($this->session->userdata('mahasiswa')->programStudi ==$value){echo "selected";}?>><?php echo $value;?></option>
                        <?php
                           }
                           ?>
                     </select>
                  </div>
                  <div class="col-sm-6 form-group">
                     <label for="exampleInputEmail1">Alamat Email</label>
                     <input type="email" class="form-control" value="<?=$this->session->userdata('mahasiswa')->email?>" id="email"  name="email" placeholder="Alamat Email" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Batas Waktu Studi</label>
                     <input type="number" size="4" class="form-control" value="<?=$this->session->userdata('mahasiswa')->batasStudi?>" id="batasStudi" onkeypress="return isNumber(event)" name="batasStudi" placeholder="Tempat Lahir" required>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Tinggi Badan</label>
                     <div class="input-group">
                        <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" value="<?=$this->session->userdata('mahasiswa')->tinggi?>" id="tinggi" name="tinggi" value="0" placeholder="Tinggi Badan" required>
                        <div class="input-group-addon">Cm</div>
                     </div>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Berat Badan</label>
                     <div class="input-group">
                        <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" value="<?=$this->session->userdata('mahasiswa')->berat?>" id="berat" name="berat" value="0" placeholder="Berat Badan" required>
                        <div class="input-group-addon">Kg</div>
                     </div>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Penghasilan OrangTua</label>
                     <select name="penghasilanParent" id="penghasilanParent" class="form-control" required>
                        <option value="< 500.000" <?php if($this->session->userdata('mahasiswa')->penghasilanParent == '< 500.000'){echo "selected";}?>>< Rp.500.000</option>
                        <option value="500.000-1.500.000" <?php if($this->session->userdata('mahasiswa')->penghasilanParent == '500.000-1.500.000'){echo "selected";}?>>Rp.500.000-Rp.1.500.000</option>
                        <option value="1500.000-3000.000" <?php if($this->session->userdata('mahasiswa')->penghasilanParent == '1500.000-3000.000'){echo "selected";}?>>Rp.1500.000-Rp.3000.000</option>
                        <option value="> 3000.000" <?php if($this->session->userdata('mahasiswa')->penghasilanParent == '> 3000.000'){echo "selected";}?> > > Rp. 3000.000</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Kewarganegaraan</label>
                     <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                        <option value="WNI" <?php if($this->session->userdata('mahasiswa')->kewarganegaraan == 'WNI'){echo "selected";}?> >WNI</option>
                        <option value="WNA" <?php if($this->session->userdata('mahasiswa')->kewarganegaraan == 'WNA'){echo "selected";}?>>WNA</option>
                     </select>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Golongan Darah</label>
                     <select name="golonganDarah" id="golonganDarah" class="form-control" required>
                        <option value="A" <?php if($this->session->userdata('mahasiswa')->golonganDarah == 'A'){echo "selected";}?>>A</option>
                        <option value="B" <?php if($this->session->userdata('mahasiswa')->golonganDarah == 'B'){echo "selected";}?>>B</option>
                        <option value="O" <?php if($this->session->userdata('mahasiswa')->golonganDarah == 'O'){echo "selected";}?>>O</option>
                        <option value="AB" <?php if($this->session->userdata('mahasiswa')->golonganDarah == 'AB'){echo "selected";}?>>AB</option>
                     </select>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Status Perkawinan</label>
                     <select name="statusKawin" id="statusKawin" class="form-control" required>
                        <option value="Menikah" <?php if($this->session->userdata('mahasiswa')->statusKawin == 'Menikah'){echo "selected";}?>>Menikah</option>
                        <option value="Belum Menikah" <?php if($this->session->userdata('mahasiswa')->statusKawin == 'Belum Menikah'){echo "selected";}?> >Belum Menikah</option>
                        <option value="Janda" <?php if($this->session->userdata('mahasiswa')->statusKawin == 'Janda'){echo "selected";}?> >Janda</option>
                        <option value="Duda" <?php if($this->session->userdata('mahasiswa')->statusKawin == 'Duda'){echo "selected";}?>>Duda</option>
                     </select>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Agama</label>
                     <input type="text" class="form-control" id="agama" name="agama" value="<?=$this->session->userdata('mahasiswa')->agama?>" placeholder="islam/protestan/katolik/hindu/buddha" required>
                  </div>
               </div>
               <h3><b>Alamat Tempat Tinggal (Kost/Asrama/Tempat di Daerah Kampus)</b></h3>
               <hr>
               <div class="row">
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kota/ Kabupaten</label>
                     <input type="text" class="form-control" id="kotaKabupatenTinggal" name="kotaKabupatenTinggal" value="<?= $this->session->userdata('mahasiswa')->kotaKabupatenTinggal; ?>" placeholder="Kota Kabupaten" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kecamatan</label>
                     <input type="text" class="form-control" id="kecamatanTinggal" name="kecamatanTinggal" value="<?= $this->session->userdata('mahasiswa')->kecamatanTinggal; ?>" placeholder="Kecamatan" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kelurahan</label>
                     <input type="text" class="form-control" id="kelurahanTinggal" name="kelurahanTinggal" value="<?= $this->session->userdata('mahasiswa')->kelurahanTinggal; ?>" placeholder="Keluruhan" required>
                  </div>
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Jalan</label>
                  <input type="text" class="form-control" id="alamatTinggal" name="alamatTinggal" value="<?= $this->session->userdata('mahasiswa')->alamatTinggal; ?>" placeholder="Alamat" required>
               </div>
               <div class="row">
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kode Pos</label>
                     <input type="number" class="form-control" id="kodepos" name="kodepos" value="<?= $this->session->userdata('mahasiswa')->posTinggal; ?>" placeholder="Kode Pos" onkeypress="return isNumber(event)" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Nomor RT</label>
                     <input type="number" class="form-control" id="rt" name="rt" value="<?= substr($this->session->userdata('mahasiswa')->rtrwTinggal, 0,strpos($this->session->userdata('mahasiswa')->rtrwTinggal, '/')) ?>" placeholder="RT" onkeypress="return isNumber(event)" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Nomor RW</label>
                     <input type="number" class="form-control" id="rw" name="rw" value="<?= substr($this->session->userdata('mahasiswa')->rtrwTinggal, strpos($this->session->userdata('mahasiswa')->rtrwTinggal, '/')+1) ?>" placeholder="RW" onkeypress="return isNumber(event)" required>
                  </div>
               </div>
               <h3><b>Alamat Domisili (Daerah Asal/Kampung Halaman)</b></h3>
               <hr>
               <div class="row">
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kota/ Kabupaten</label>
                     <input type="text" class="form-control" id="kotaKabupatenDomisili" name="kotaKabupatenDomisili" value="<?= $this->session->userdata('mahasiswa')->kotaKabupatenDomisili; ?>" placeholder="Kota Kabupaten" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kecamatan</label>
                     <input type="text" class="form-control" id="kecamatanDomisili" name="kecamatanDomisili" value="<?= $this->session->userdata('mahasiswa')->kecamatanDomisili; ?>" placeholder="Kecamatan" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kelurahan</label>
                     <input type="text" class="form-control" id="kelurahanDomisili" name="kelurahanDomisili" value="<?= $this->session->userdata('mahasiswa')->kelurahanDomisili; ?>" placeholder="Keluruhan" required>
                  </div>
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Jalan</label>
                  <input type="text" class="form-control" id="alamatTinggal" name="alamatDomisili" value="<?= $this->session->userdata('mahasiswa')->alamatDomisili; ?>" placeholder="Alamat" required>
               </div>
               <div class="row">
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Kode Pos</label>
                     <input type="number" class="form-control" id="posDomisili" name="posDomisili" value="<?= $this->session->userdata('mahasiswa')->posDomisili; ?>" placeholder="Kode Pos" onkeypress="return isNumber(event)" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Nomor RT</label>
                     <input type="number" class="form-control" id="rtDomisili" name="rtDomisili" value="<?= substr($this->session->userdata('mahasiswa')->rtrwDomisili, 0,strpos($this->session->userdata('mahasiswa')->rtrwDomisili, '/')) ?>" placeholder="RT" onkeypress="return isNumber(event)" required>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label for="exampleInputEmail1">Nomor RW</label>
                     <input type="number" class="form-control" id="rwDomisili" name="rwDomisili" value="<?= substr($this->session->userdata('mahasiswa')->rtrwDomisili, strpos($this->session->userdata('mahasiswa')->rtrwDomisili, '/')+1) ?>" placeholder="RW" onkeypress="return isNumber(event)" required>
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
   // $('.knob').knob();
   $('#tanggalLahir').datepicker({
   		    format: "dd/mm/yyyy",
   		    language: "id",
   		    autoclose: true
   		});
   		$('#tanggalMasuk').datepicker({
   		    format: "dd/mm/yyyy",
   		    language: "id",
   		    autoclose: true
   		});
</script>