 

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Template
        <!--<small>Version 1.0</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active"><a href="<?= base_url('a/Template');?>">Template</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">          
            <div class="col-xs-12">
              <?php if($update_success_msg){?>
                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $update_success_msg; ?>
                  </div>
              <?php }?>
              <?php if($update_error_msg){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $update_error_msg; ?>
                  </div>
              <?php }?>
            </div>
         
      </div>
      <!-- Info boxes -->
  
      <div class="row">
          <div class="col-xs-12">
            <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Template</h3><br>
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
            <div class="box-body table-responsive">
              
              
              <form id="myform" method="post">
              <button class="btn btn-success btn-xs" id="button-submit-template">
                  Kirim
                </button> &nbsp; 
                <a class="btn btn-primary btn-xs" href="<?= base_url('a/Template/add');?>">
                      
                      Tambah
                    
                </a>
              <table id="table-template" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th><input type="checkbox" id="checkall_template"></th>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Jenis Produk</th>
                  <th>Skala</th>
                  <th>Kode Template</th>
                  <th>Metode</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $i=1;
                  foreach ($template->result() as $key) {
                    ?>
                    <tr>
                      <td><input type="checkbox" class="id_template" onchange="counting(<?=$key->id_template?>)" value="<?=$key->id_template?>" <?php if($key->status !=''){echo "disabled='TRUE'";}?>></td>
                      <td><?=$i?></td>
                      <td><?=$key->tahun?></td>
                      <td><?=$key->informasi_geospasial."/".$key->sub_informasi_geospasial."/".$key->jenis_produk?></td>
                      <td>1:<?=$key->skala?></td>
                      <td><?=$key->template?></td>
                      <td><?=$key->metode?></td>
                      <td><?=$key->status?></td>
                      <td>
                        <a href="<?= base_url('a/Template/detil/'.$key->id_template);?>"><button type="button" class="btn btn-default btn-xs">Detil</button></a>&nbsp;<a href="<?= base_url('a/Template/ubah/'.$key->id_template);?>"><button type="button" class="btn btn-warning btn-xs">Ubah</button></a>&nbsp;
                        <button type="button" class="btn btn-danger btn-xs" data-href="<?=base_url()?>a/Template/delete/<?=$key->id_template?>/<?=$this->uri->segment(4)?>"  data-nama="<?=$key->template?>" data-text="Template" data-toggle="modal" data-target="#confirm-delete">Hapus</button></td>
                    </tr>
                    <?php $i++;
                  }
                  ?>
                
                </tbody>
                <tfoot>
               
                </tfoot>
              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>  
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
      
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus </h4>
                            </div>
                        
                            <div class="modal-body">
                                <p>Anda ingin Menghapus ?</p>
                                Detail :  <strong><span class="debug-url"></span></strong>
                            </div>
                            
                            <div class="modal-footer">
                                <a class="btn btn-warning btn-ok">Hapus</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
    let id_template = [];
    function counting(val) {
        // alert(val);
        if (!id_template.includes(val)) {
          id_template.push(val);
        }else{
          id_template.splice( id_template.indexOf(val), 1 ); 
        }
        $('#checkall_template').prop('checked',false);
        console.log('satuan : ',id_template);
      }
    $( document ).ready(function() {
      $('#checkall_template').change(function() {

          $('.id_template').prop('checked', this.checked);
          var status =  this.checked;
          $("tbody").find(".id_template").each(function(){
            if ($(this).context.disabled != false) {
              console.log($(this));
              $(this).context.checked = false;
              if (status) {
                  id_template.push(parseInt($(this).val()));
                }else{
                  id_template.splice( id_template.indexOf(parseInt($(this).val())), 1 ); 
                  // id_template.pop();
                }
            }
          });
          id_template = _.uniq(id_template);
          console.log('checkall : ',id_template);
      });
      $('#button-submit-template').on('click',function() {
        
        $.ajax({
          url: '<?=base_url()?>a/Template/submit/',
          type: 'POST',
          dataType:'json',
          data: {'data':id_template},
          success: function(data) {
            console.log('data:',data );
            window.location.reload();
          },
          error: function(e) {
            //called when there is an error
            console.log(e.message);
          }
        });
        return false;
      });
      console.log( "ready!" );
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $('#myModalLabel').text('Konfirmasi Hapus '+$(e.relatedTarget).data('text'));
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        $('.debug-url').html($(e.relatedTarget).data('nama'));
      });
      table = $('#table-template').DataTable({ 
 
            "processing": true, 
            //"serverSide": true, 
            "order": [], 
             
            /*"ajax": {
                "url": "<?php echo site_url()?>",
                "type": "POST"
            },*/
 
             
            "columnDefs": [
            { 
                "targets": [ 0,1,-1 ], 
                "orderable": false, 
            },
            ],
            /*tambahan ganti bahasa*/
            <?php include 'datatables_bahasa.php'; ?>
        });
      
  });
  </script>


