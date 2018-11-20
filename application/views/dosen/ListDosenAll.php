<?php
  $this->load->view('dosen/Header');
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
				<h3 class="box-title">Data Dosen</h3>
				<div class="box-tools pull-right">
            <a href="<?php echo site_url();?>dosen/Dosen/tambahDataDosen" data-rel="collapse">
              <button type="button" class="btn btn-primary">
              <i class="glyphicon glyphicon-plus"></i>
              Tambah
              </button>
            </a>
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
		          <li class="active"><a href="#tab_1" data-toggle="tab">Semua Data Dosen</a></li>
		          <!-- <li><a href="#tab_2" data-toggle="tab">Sebagai Penguji</a></li>
		          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
		        </ul>
		     <div class="tab-content">
		        <div class="tab-pane active" id="tab_1">
              <section class="content">
                <div class="row">
                  <table id="tabel" class="cell-border" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nama Dosen</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($dosen->result_array() as $i): ?>
                    <tr>
                      <td><?php echo $i['nama']; ?></td>
                      <td><?php echo $i['nip']; ?></td>
                      <td><?php echo $i['email']; ?></td>
                      <td><?php echo $i['username']; ?></td>
                      <td><?php if($i['isAdmin'] == '1') { echo 'Panitia';}else {echo 'Dosen';}; ?></td>
                      <td>
                        <a href="<?php echo site_url();?>dosen/Dosen/getEditDosen/<?php echo $i['id']; ?>"><button type="button" class="btn btn-primary">Ubah</button></a>
                        <a data-id="<?php echo $i['id']; ?>" data-toggle="modal" data-target="#konfirmHapus" href="javascript;:"> <button type="button" class="btn btn-danger" >Hapus</button></a>
                      </td>
                    </tr>
                   <?php endforeach;?>
                  </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama Dosen</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                  <!-- /.col -->
                </div>
                <div class="modal fade" id="konfirmHapus" role="dialog" tabindex="-1">
						    <div class="modal-dialog" role="document">
						       	<div class="modal-content">
											<div class="modal-header">
						             <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
						             <h4 class="modal-title">Delete Dosen</h4>
						          </div>
						          <div class="modal-body">
						 					 	Apakah Anda yakin ingin menghapus data ini?
						          </div>
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" aria-label="Tutup">Batal</button>
												<!-- <button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</button> -->
												<a href="javascript:;" id="hapus-ok"><button class="btn btn-danger btn-ok"><i class="glyphicon glyphicon-remove"></i>Hapus</button></a>
											</div>
						    		</div>
						 </div>
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
	$(document).ready(function(){
		$('#konfirmHapus').on('show.bs.modal', function (event) {
			var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

			// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
			var id = div.data('id')
			var modal = $(this)

// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
			modal.find('#hapus-ok').attr("href","<?php echo site_url();?>dosen/Dosen/hapusDataDosen/"+id);
		})
 });
 </script>
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
<?php
  $this->load->view('dosen/Footer');
?>
