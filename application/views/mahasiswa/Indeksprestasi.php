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
            <form action="<?=base_url()?>/Welcome/submit" method="POST">
               <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="<?=$this->session->userdata('mahasiswa')->namaLengkap?>" placeholder="Nama Lengkap">
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