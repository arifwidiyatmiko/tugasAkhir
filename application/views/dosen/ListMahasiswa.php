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
				<h3 class="box-title">Daftar Mahasiswa</h3>
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
		          <li class="active"><a href="#tab_1" data-toggle="tab">Sebagai Pembimbing</a></li>
		          <li><a href="#tab_2" data-toggle="tab">Sebagai Penguji</a></li>
		          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
		        </ul>
		     <div class="tab-content">
		        <div class="tab-pane active" id="tab_1">
              <section class="content">
                <div class="row">
                  <table id="example" class="cell-border" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Jenis Kelamin</th>
                        <th>Kajian</th>
                        <th>Instansi PKL</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($mhsbimbing->result_array() as $m): ?>
                      <tr>
                        <td><?php echo $m['namaLengkap']; ?></td>
                        <td><?php echo $m['nim']; ?></td>
                        <td><?php echo $m['jenisKelamin']; ?></td>
                        <td><?php echo $m['namaKajian']; ?></td>
                        <td>
                          <a href="<?php echo site_url();?>dosen/Instansi/detailInstansi/<?php echo $m['idInstansi']; ?>">
                              <?php echo $m['namaInstansi']; ?>
                          </a>
                        </td>
                        <td>
                          <a href="<?php echo site_url();?>dosen/Mahasiswa/detailMahasiswa/<?php echo $m['nim']; ?>">
                            <button type="button" class="btn btn-primary">
                              Detail Data
                            </button>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Jenis Kelamin</th>
                        <th>Kajian</th>
                        <th>Instansi PKL</th>
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
		                The European languages are members of the same family. Their separate existence is a myth.
		                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
		                in their grammar, their pronunciation and their most common words. Everyone realizes why a
		                new common language would be desirable: one could refuse to pay expensive translators. To
		                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
		                words. If several languages coalesce, the grammar of the resulting language is more simple
		                and regular than that of the individual languages.
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
  $('#example').DataTable();
} );
</script>


<script>
	/* jQueryKnob */
	$('.knob').knob();
</script>
<?php
  $this->load->view('dosen/Footer');
?>
