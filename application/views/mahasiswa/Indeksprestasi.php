<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Data
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
                                    // if (evt.which == 188) {return true;}
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
            <h3 class="box-title">Hasil Belajar</h3>
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
            <form action="<?=base_url()?>/Welcome/submitip" method="POST">
               <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-2 form-group">
                     <label for="exampleInputEmail1">IPK Semester 1</label>
                     <input type="number" class="form-control" id="ips1" name="ips1" value="<?=$this->session->userdata('mahasiswa')->ips1?>" pattern="[0-9]+([,\.][0-9]+)?" placeholder="4.00" step="0.01" min="0" max="4"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
   event.charCode == 46 || event.charCode == 0 " >
                  </div>
                  <div class="col-sm-2 form-group">
                     <label for="exampleInputEmail1">IPK Semester 2</label>
                     <input type="number" class="form-control" id="namaLengkap" name="ips2" value="<?=$this->session->userdata('mahasiswa')->ips2?>" pattern="[0-9]+([,\.][0-9]+)?" placeholder="4.00" step="0.01" min="0" max="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
   event.charCode == 46 || event.charCode == 0 ">
                  </div>
                  <div class="col-sm-2 form-group">
                     <label for="exampleInputEmail1">IPK Semester 3</label>
                     <input type="number" class="form-control" id="namaLengkap" name="ips3" value="<?=$this->session->userdata('mahasiswa')->ips3?>" pattern="[0-9]+([,\.][0-9]+)?" placeholder="4.00" step="0.01" min="0" max="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
   event.charCode == 46 || event.charCode == 0 ">
                  </div>
                  <div class="col-sm-2 form-group">
                     <label for="exampleInputEmail1">IPK Semester 4</label>
                     <input type="number" class="form-control" id="namaLengkap" name="ips4" value="<?=$this->session->userdata('mahasiswa')->ips4?>" pattern="[0-9]+([,\.][0-9]+)?" placeholder="4.00" step="0.01" min="0" max="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
   event.charCode == 46 || event.charCode == 0 ">
                  </div>
                  <div class="col-sm-2 form-group">
                     <label for="exampleInputEmail1">IPK Semester 5</label>
                     <input type="number" class="form-control" id="namaLengkap" name="ips5" value="<?=$this->session->userdata('mahasiswa')->ips5?>" pattern="[0-9]+([,\.][0-9]+)?" placeholder="4.00" step="0.01" min="0" max="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57) ||  
   event.charCode == 46 || event.charCode == 0 ">
                  </div>
                  <div class="col-sm-1"></div>  
               </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
         </div>
         <!-- /.box-body -->
      </div>
      <div class="box">
         <div class="box-header with-border">
            <h3 class="box-title">Bidang Kajian</h3>
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
            <form action="<?=base_url()?>/Welcome/submitkajian" method="POST" enctype="multipart/form-data">
               <div class="row">
                   
                  <div class="col-sm-4 form-group">
                     <label>Pilih Bidang Kajian</label>
                     <select name="" class="form-control">
                        <option>-- Pilih --</option>
                        <?php 
                        foreach ($kajian->result() as $key) {
                           ?><option value="<?=$key->idKajian?>"><?=$key->namaKajian?></option><?php
                        }
                        ?>
                     </select>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label>Nama Instansi/Perusahaan</label>
                     <input type="text" name="namaInstansi" id="namaInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
                  <div class="col-sm-4 form-group">
                     <label>Nama Pimpinan Instansi</label>
                     <input type="text" name="pimpinanInstansi" id="pimpinanInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
               </div>
               <div class="row">
                   
                  <div class="col-sm-3 form-group">
                     <label>Kota Instansi/Perusahaan</label>
                     <input type="text" name="kotaKabInstansi" id="kotaKabInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Email Instansi/Perusahaan</label>
                     <input type="text" name="emailInstansi" id="emailInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Kode POS Instansi/Perusahaan</label>
                     <input type="text" name="posInstansi" id="posInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Nomor Telepon Instansi/Perusahaan</label>
                     <input type="number" name="kontakInstansi" id="kontakInstansi" class="form-control" style="text-transform:uppercase">
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 form-group">
                     <label>Upload Surat Balasan</label>
                     <input type="file" name="" class="form-control" style="text-transform:uppercase">
                  </div>
               </div>
               
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
  $( function() {
    var availableTags = <?=json_encode($instansi->result())?>;
    var data = _.map(availableTags, 'namaInstansi');
    $( "#namaInstansi" ).autocomplete({
      source: data,
      change: function( event, ui ) {
        console.log(ui);
      }
    });
  } );
  </script>
<script>
</script>