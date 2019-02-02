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
      <form method="post" id="update_form">
          <!-- <div align="left">
              <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Ploting" />
          </div> -->
          <br />
          <div class="table-responsive">
            <table id="example" class="stripe row-border order-column" style="width:100%">
              <thead>
                <th></th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Lokasi PKL</th>
                <th>Kajian</th>
                <!-- <th>IP 1</th>
                <th>IP 2</th>
                <th>IP 3</th>
                <th>IP 4</th>
                <th>IP 5</th> -->
                <th>Dosen Pembimbing</th>
                <th></th>
              </thead>
              <thead id="filter">
              </thead>
            <tbody></tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  var dataTable;
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
  fetch_data();
  function fetch_data()
  {
    dataTable = $('#example').DataTable({
    "ajax" :"<?php echo site_url('dosen/BidangKajian/listDataAjax')?>",
     initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            var select = $('<select><option value=""></option></select>')
                .appendTo( $(column.header()))
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );
                    column
                        .search( val ? '^'+val+'$' : '', true, false )
                        .draw();
                } );
            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
      }
    });
  }
});
function fetch_dosen(){
      $.ajax({
          url:"<?php echo site_url('dosen/Dosen/listDosenAllAjax')?>",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
              // console.log(data);
              var option = '';
              // alert(data.length);
              option += '<option value="">--Pilih Dosen--</option>';
              for(var count = 0; count < data.length; count++)
              {
                option += '<option value="'+data[count].id+'">'+data[count].nama+'</option>';
              }
               option += '</select>';
               $('#dospem').html(option);
              //fetch_data();
          }
      });
}
function reload_table()
{
    dataTable.ajax.reload();
}
function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url = "<?php echo site_url('dosen/BidangKajian/updateDospemAjax')?>";
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
          //console.log(data[0]); alert(data[0]);
          // console.log(data);
          // var option = '';
          // alert(data.length);
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
function edit_person(id)
{
  save_method = 'update';
  $('#form')[0].reset(); // reset form on modals
  $('.form-group').removeClass('has-error'); // clear error class
  $('.help-block').empty(); // clear error string
  //Ajax Load data from ajax
  $.ajax({
      url : "<?php echo site_url('dosen/BidangKajian/detailMahasiswaAjax')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        console.log(data);
                      var option = '';
                      // alert(data.length);
          $('[name="nim"]').val(data[0].nim);
          $('[name="namaLengkap"]').val(data[0].namaLengkap);
          $('[name="namaInstansi"]').val(data[0].namaInstansi);
          $('[name="ips1"]').val(data[0].ips1);
          $('[name="ips2"]').val(data[0].ips2);
          $('[name="ips3"]').val(data[0].ips3);
          $('[name="ips4"]').val(data[0].ips4);
          $('[name="ips5"]').val(data[0].ips5);
          fetch_dosen();
          //$('[name="dospem"]').val(data[0].nama);
          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
  });
}
</script>
<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="nim"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input name="namaLengkap" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Instansi</label>
                            <div class="col-md-9">
                                <input name="namaInstansi" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IP Semester 1</label>
                            <div class="col-md-9">
                                <input name="ips1" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IP Semester 2</label>
                            <div class="col-md-9">
                                <input name="ips2" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IP Semester 3</label>
                            <div class="col-md-9">
                                <input name="ips3" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IP Semester 4</label>
                            <div class="col-md-9">
                                <input name="ips4" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IP Semester 5</label>
                            <div class="col-md-9">
                                <input name="ips5" class="form-control" type="text" disabled>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Dosen Pembimbing</label>
                            <div class="col-md-9">
                                <select id="dospem" name="dospem" class="form-control">
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<?php
  $this->load->view('dosen/Footer');
?>
