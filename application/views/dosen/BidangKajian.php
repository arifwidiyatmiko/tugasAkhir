<?php
  //$this->load->view('dosen/Header');
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
				<div class="nav-tabs-custom">
		       <ul class="nav nav-tabs">
		          <li class="active"><a href="#tab_1" data-toggle="tab">Menunggu Verifikasi</a></li>
		          <li><a href="#tab_2" data-toggle="tab">Terverifikasi</a></li>
		          <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
		        </ul>
		     <div class="tab-content">
		        <div class="tab-pane active" id="tab_1">
              <button class="btn btn-primary" onclick="bulk_verifikasi()"><i class="glyphicon glyphicon-pencil"></i>Verifikasi</button>
              <section class="content">
                <div class="row">
                  <table id="tabel" class="cell-border" style="width:100%">
                    <thead>
                      <tr>
                        <th><input type="checkbox" id="check-all"></th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Bidang Kajian</th>
                        <th>Nama Instansi</th>
                        <th>Pembimbing</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($mhs->result_array() as $i):
											if ($i['statusKajian'] == "0") {
										?>

                    <tr>
                      <td><input type="checkbox" class="data-check" value="<?php echo $i['nim']; ?>"></td>
                      <td><?php echo $i['namaLengkap']; ?></td>
                      <td><?php echo $i['nim']; ?></td>
                      <td><?php echo $i['namaKajian']; ?></td>
                      <td><?php echo $i['namaInstansi']; ?></td>
                      <td><?php echo $i['nama']; ?></td>
                      <td>
                        <a href="<?php echo site_url();?>dosen/Mahasiswa/detailMahasiswa/<?php echo $i['nim']; ?>"><button type="button" class="btn btn-primary">Detail Data</button></a>
                        <!-- <a href="<?php echo site_url();?>dosen/BidangKajian/updateVerifikasiSatu/<?php echo $i['nim']; ?>"><button type="button" class="btn btn-primary">Verifikasi</button></a> -->
                      </td>
                    </tr>
									<?php } ?>
                  </tbody>
                    <tfoot>
                      <tr>
                        <th><input type="checkbox" id="check-all"></th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Bidang Kajian</th>
                        <th>Nama Instansi</th>
                        <th>Pembimbing</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                  <!-- /.col -->
                </div>
      <!-- /.row -->
              </section>
		        </div>
		  <!-- /.tab-pane -->
		        <div class="tab-pane" id="tab_2">
							<section class="content">
								<div class="row">
									<table id="tabel" class="cell-border" style="width:100%">
										<thead>
											<tr>
												<th><input type="checkbox" id="check-all"></th>
												<th>Nama Mahasiswa</th>
												<th>NIM</th>
												<th>Bidang Kajian</th>
												<th>Nama Instansi</th>
												<th>Status Proses</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php if ($i['statusKajian'] == "1") {?>
										<tr>
											<td><input type="checkbox" class="data-check" value="<?php echo $i['nim']; ?>"></td>
											<td><?php echo $i['namaLengkap']; ?></td>
											<td><?php echo $i['nim']; ?></td>
											<td><?php echo $i['namaKajian']; ?></td>
											<td><?php echo $i['namaInstansi']; ?></td>
											<td><?php echo $i['statusKajian']; ?></td>
											<td>
												<a href="<?php echo site_url();?>dosen/Mahasiswa/detailMahasiswa/<?php echo $i['nim']; ?>"><button type="button" class="btn btn-primary">Detail Data</button></a>
												<!-- <a href="<?php echo site_url();?>dosen/BidangKajian/updateVerifikasiSatu/<?php echo $i['nim']; ?>"><button type="button" class="btn btn-primary">Verifikasi</button></a> -->
											</td>
										</tr>
									<?php }endforeach;?>
									</tbody>
										<tfoot>
											<tr>
												<th><input type="checkbox" id="check-all"></th>
												<th>Nama Mahasiswa</th>
												<th>NIM</th>
												<th>Bidang Kajian</th>
												<th>Nama Instansi</th>
												<th>Status Proses</th>
												<th>Aksi</th>
											</tr>
										</tfoot>
									</table>
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
  $(document).ready(function() {
  $('#tabel').DataTable();
} );
</script>
<script>
	/* jQueryKnob */
	$('.knob').knob();
</script>
<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {

    // //datepicker
    // $('.datepicker').datepicker({
    //     autoclose: true,
    //     format: "yyyy-mm-dd",
    //     todayHighlight: true,
    //     orientation: "top auto",
    //     todayBtn: true,
    //     todayHighlight: true,
    // });
    //check all
    $("#check-all").click(function () {
        $(".data-check").prop('checked', $(this).prop('checked'));
    });

});

function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title

}

function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('person/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="firstName"]').val(data.firstName);
            $('[name="lastName"]').val(data.lastName);
            $('[name="gender"]').val(data.gender);
            $('[name="address"]').val(data.address);
            $('[name="dob"]').datepicker('update',data.dob);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    window.location.reload();
    // table.ajax.reload(null,false); //reload datatable ajax
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('person/ajax_add')?>";
    } else {
        url = "<?php echo site_url('person/ajax_update')?>";
    }

    // ajax adding data to database
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function bulk_verifikasi()
{
    var list_id = [];
    $(".data-check:checked").each(function() {
            list_id.push(this.value);
    });
    if(list_id.length > 0)
    {
        if(confirm('Anda yakin ingin melakukan verifikasi sebanyak '+list_id.length+' mahasiswa?'))
        {
            $.ajax({
                type: "POST",
                data: {id:list_id},
                url: "<?php echo site_url('dosen/BidangKajian/UpdateVerifikasi')?>",
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        reload_table();
                    }
                    else
                    {
                        alert('Verifikasi Gagal.');
                    }

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
    else
    {
        alert('no data selected');
    }
}
 </script>
</script>



<?php
  //$this->load->view('dosen/Footer');
?>
