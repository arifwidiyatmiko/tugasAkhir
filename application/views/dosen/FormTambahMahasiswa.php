<?php
  $this->load->view('dosen/Header');
?>
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
            <form action="<?php echo site_url();?>dosen/Mahasiswa/simpanTambahMahasiswa" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="exampleInputEmail1">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap">
               </div>
               <div class="row">
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Batas Waktu Studi</label>
                     <input type="number" size="4" class="form-control" id="batasStudi" onkeypress="return isNumber(event)" name="batasStudi" placeholder="Batas Waktu Studi" required>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Tinggi Badan</label>
                     <div class="input-group">
                        <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" id="tinggi" name="tinggi" value="0" placeholder="Tinggi Badan" required>
                        <div class="input-group-addon">Cm</div>
                     </div>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Berat Badan</label>
                     <div class="input-group">
                        <input type="number" size="3" class="form-control" onkeypress="return isNumber(event)" id="berat" name="berat" value="0" placeholder="Berat Badan" required>
                        <div class="input-group-addon">Kg</div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3 form-group">
                     <label for="exampleInputEmail1">Kewarganegaraan</label>
                     <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                        <option value="">--Pilih Kewarganegaraan--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                     </select>
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
<!-- <script>
   function uploadFile() {
      var file_data = $('#pasFoto').prop('files')[0];
      // console.log(file_data);
      if (file_data.size > (1024*100*2)) {
        alert('Unggah Pas Foto Maksimal 200 KB');$('#pasFoto').val('');return false;
      }
      if (file_data.type > 'image/jpeg') {
        alert('Format File Harus  JPG.');$('#pasFoto').val('');return false;
      }
   }
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
</script> -->
<?php
  $this->load->view('dosen/Footer');
?>
