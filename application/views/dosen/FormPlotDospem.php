<?php
  $this->load->view('dosen/Header');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Plot Dosen Pembimbing
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
			</div>
			<!-- /.box-header -->
      <form name="add_name" id="add_name">
        <div class="form-group">
          <label for="inputNama" class="col-sm-2 control-label">Dosen Pembimbing</label>
          <select name="mhs[]" class="form-control js-example-basic-single">
            <option selected="true" disabled="disabled">--Pilih Dosen Pembimbing--</option>
            <?php foreach($datadosen as $d){ ?>
            <option value="<?php echo $d->id?>"><?php echo $d->nama?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <div class="table-responsive">
            <label for="inputNama" class="col-sm-2 control-label">Daftar Mahasiswa</label>
            <table class="table table-bordered" id="dynamic_field">
              <tr>
                <td>
                  <select name="mhs[]" class="form-control js-example-basic-single">
                    <option selected="true" disabled="disabled">--Pilih Mahasiswa--</option>
                    <?php foreach($datamhs as $m){ ?>
                    <option value="<?php echo $m->nim?>"><?php echo $m->namaLengkap?></option>
                    <?php } ?>
                  </select>
                </td>
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="box-footer">
          <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
          <button type="submit" class="btn btn-info pull-right">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $(".js-example-basic-single").select2();
});
</script>
<script>
$(document).ready(function(){
     var i=1;
     $('#add').click(function(){
          i++;
          $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="mhs[]" class="form-control js-example-basic-single"><option selected="true" disabled="disabled">--Pilih Mahasiswa--</option><?php foreach($datamhs as $m){ ?><option value="<?php echo $m->nim?>"><?php echo $m->namaLengkap?></option><?php } ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
          $(".js-example-basic-single").select2();
     });
     $(document).on('click', '.btn_remove', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
     });
     $('#submit').click(function(){
          $.ajax({
               url:"name.php",
               method:"POST",
               data:$('#add_name').serialize(),
               success:function(data)
               {
                    alert(data);
                    $('#add_name')[0].reset();
               }
          });
     });
});
</script>
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<?php
  $this->load->view('dosen/Footer');
?>
