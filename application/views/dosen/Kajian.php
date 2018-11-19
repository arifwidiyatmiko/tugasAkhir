

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Menu
            <small>Data Kajian</small>
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
                <h3 class="box-title">Data Kajian</h3>
                <div class="box-tools pull-right">
                    <button class="pull-right btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Tambah</button>
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
                  <li class="active"><a href="#tab_1" data-toggle="tab">Semua Data Kajian</a></li>
                  <!-- <li><a href="#tab_2" data-toggle="tab">Sebagai Penguji</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                </ul>
             <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

              <section class="content">

                <div class="row">
                  <table id="tabel" class="table table-hover" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nama Kajian</th>
                        <th>Jumlah Program Studi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($kajian as $i): ?>
                    <tr>
                      <td><?php echo $i['namaKajian']; ?></td>
                      <td><?php echo implode(",", $i['kode']);?></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#editModal" data-href="<?=base_url()?>dosen/BidangKajian/kajian/delete/<?= $i['idKajian']?>" data-name="<?= $i['namaKajian']?>">Ubah</button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-href="<?=base_url()?>dosen/BidangKajian/kajian/delete/<?= $i['idKajian']?>" data-name="<?= $i['namaKajian']?>">Hapus</button>
                      </td>
                    </tr>
                   <?php endforeach;?>
                  </tbody>
                    <tfoot>
                      <tr>
                         <th>Nama Kajian</th>
                        <th>Jumlah Program Studi</th>
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
                <!-- <div class="tab-pane" id="tab_2">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                 </div> -->
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
  $('#idProgramStudi').select2();
  $('#deleteModal').on('show.bs.modal', function(e) {
                alert($(e.relatedTarget).data('href'));
                // $('#form-edit').attr('action', $(e.relatedTarget).data('href'));
                $('#hrefKajian_m').prop('href', $(e.relatedTarget).data('href'));
                $('#namaKajian_m').text($(e.relatedTarget).data('name'));
                // $('#form-edit').attr('action', $(e.relatedTarget).data('id'));
            });
} );
</script>
<script>
    /* jQueryKnob */
    $('.knob').knob();
</script>
<!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Kajian</h4>
      </div>
      <div class="modal-body">
        <span>Hapus Kajian dengan nama : <span id="namaKajian_m"></span> </span>
      </div>
      <div class="modal-footer">
        <a id="hrefKajian_m" class="btn btn-danger">Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>

  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Kajian</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url()?>dosen/BidangKajian/kajian/add" method="POST">
            <div class="form-group" >
                <label>Nama Kajian</label>
                <input type="text" name="namaKajian" id="namaKajian" class="form-control">
            </div>
            <div class="form-group">
                <select name="idProgramStudi[]" id="idProgramStudi" class="form-control" multiple >
                    <?php
                    foreach($programStudi->result() as $key){
                        ?>
                        <option value="<?=$key->idProgramstudi?>"><?=$key->namaProgramstudi?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>  