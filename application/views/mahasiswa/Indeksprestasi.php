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
                     <select name="kajian" class="form-control">
                        <option>-- Pilih --</option>
                        <?php
                        if ($bidKajian->num_rows() != 0) {
                          foreach ($kajian->result() as $key) {
                             ?><option value="<?=$key->idKajian?>" <?php if($bidKajian->result()[0]->idKajian == $key->idKajian){echo "selected";}?>><?=$key->namaKajian?></option><?php
                          }
                        }else{
                          foreach ($kajian->result() as $key) {
                             ?><option value="<?=$key->idKajian?>"><?=$key->namaKajian?></option><?php
                          }
                        }
                        ?>
                        <?php 
                        
                        ?>
                     </select>
                  </div>
                  <div class="col-sm-4 form-group">
                     <label>Nama Instansi/Perusahaan</label>
                     <input type="text" name="namaInstansi" id="namaInstansi" class="form-control" style="text-transform:uppercase" required> 
                  </div>
                  <div class="col-sm-4 form-group">
                     <label>Nama Pimpinan Instansi</label>
                     <input type="text" name="pimpinanInstansi" id="pimpinanInstansi" class="form-control" style="text-transform:uppercase" required>
                  </div>
               </div>
               <div class="row">
                   
                  <div class="col-sm-3 form-group">
                     <label>Kota Instansi/Perusahaan</label>
                     <input type="text" name="kotaKabInstansi" id="kotaKabInstansi" class="form-control" style="text-transform:uppercase" required>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Email Instansi/Perusahaan</label>
                     <input type="text" name="emailInstansi" id="emailInstansi" class="form-control" style="text-transform:uppercase" required>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Kode POS Instansi/Perusahaan</label>
                     <input type="text" name="posInstansi" id="posInstansi" class="form-control" style="text-transform:uppercase" required>
                  </div>
                  <div class="col-sm-3 form-group">
                     <label>Nomor Telepon Instansi/Perusahaan</label>
                     <input type="number" name="kontakInstansi" id="kontakInstansi"  class="form-control" style="text-transform:uppercase" required>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6 form-group">
                    <?php 
                    if($bidKajian->result()[0]->suratBalasanInst != '' && strlen($bidKajian->result()[0]->suratBalasanInst)>=10){
                      ?><label><a target="new" href="<?=base_url();?>assets/filemahasiswa/SB/<?=$bidKajian->result()[0]->suratBalasanInst;?>">Unduh</a></label><br/><?php
                    }
                    ?>
                     <label>Upload Surat Balasan</label>
                     <input type="file" name="suratBalasan" id="suratBalasan" class="form-control" onchange="uploadFile()" style="text-transform:uppercase">
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
    var bidKajian = <?=json_encode($bidKajian->result())?>;
    if (bidKajian.length != 0) {
      var selected = _.find(availableTags, { 'idInstansi': bidKajian[0].idInstansi});
        // console.log('select ',selected)
        $('#pimpinanInstansi').val(selected.pimpinanInstansi);
        $('#kontakInstansi').val(selected.kontakInstansi);
        $('#posInstansi').val(selected.posInstansi);
        $('#emailInstansi').val(selected.emailInstansi);
        $('#kotaKabInstansi').val(selected.kotaKabInstansi);
        $('#namaInstansi').val(selected.namaInstansi);
         // $('#kontakInstansi').val(selected.namaInstansi);
    }
    $( "#namaInstansi" ).autocomplete({
      source: data,
      // change: function( event, ui ) {
      //   console.log('change ',ui);
      // },
      // close: function( event, ui ) {
      //   console.log('close ',ui);
      // },
      // response: function( event, ui ) {
      //   console.log('response ',ui);
      // },
      select: function( event, ui ) {
        // console.log('select ',ui);
        var selected = _.find(availableTags, { 'namaInstansi': ui.item.label});
        // console.log('select ',selected)
        $('#pimpinanInstansi').val(selected.pimpinanInstansi);
        $('#kontakInstansi').val(selected.kontakInstansi);
        $('#posInstansi').val(selected.posInstansi);
        $('#emailInstansi').val(selected.emailInstansi);
        $('#kotaKabInstansi').val(selected.kotaKabInstansi);
      }
    });
      } );
  function uploadFile() {
      var file_data = $('#suratBalasan').prop('files')[0]; 
      console.log(file_data);  
      if (file_data.size > (1024*100*5)) {
        alert('Upload PDF Scan Surat Balasan Instansi/Perusahaan Maksimal 500 KB');$('#suratBalasan').val('');return false;
      }
      if (file_data.type > 'application/pdf') {
        alert('Format File Harus  PDF.');$('#suratBalasan').val('');return false;
      }
    }

  </script>
<script>
</script>