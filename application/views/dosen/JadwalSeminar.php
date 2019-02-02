<?php
$this->load->view('dosen/header');
?>
<style>
thead input {
      width: 100%;
  }
</style>
  <div class="content-wrapper">
	   <section class="content-header">
		     <h1>
			       Seminar
			           <small>Jadwal Seminar</small>
		     </h1>
		     <ol class="breadcrumb">
			        <li class="active"><a href="javascript:void(0);"><i class="fa fa-home"></i> </a></li>
		     </ol>
	   </section>
	   <section class="content">
		     <div class="box">
			        <div class="box-header with-border">
				            <h3 class="box-title"></h3>
				            <div class="box-tools pull-right">
					               <button type="button" class="toggle-expand-btn btn btn-box-tool btn-sm">
						                  <i class="fa fa-expand"></i>
					               </button>
					               <button type="button" class="btn btn-box-tool" data-widget="collapse">
						                  <i class="fa fa-minus"></i>
					               </button>
				            </div>
			        </div>
			        <div class="box-body">
				        <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active"><a href="#tab_1" data-toggle="tab">Menunggu Verifikasi</a></li>
		                    <li><a href="#tab_2" data-toggle="tab">Terverifikasi</a></li>
		                    <li><a href="#tab_3" data-toggle="tab">Tidak Terverifikasi</a></li>
		                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="tab_1">
                          <div class="box-body">
                            <section class="content">
                              <table id="example" class="display table-bordered table-striped table-hover" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>NIM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Pembimbing</th>
                                    <th>Kajian</th>
                                    <th>Tanggal Seminar</th>
                                    <th>Waktu Seminar</th>
                                    <th>Ruang</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>J3D113066</td>
                                    <td>Raply</td>
                                    <td>Walidatush Sholihah, SSi, MKom</td>
                                    <td>Hardware</td>
                                    <td>20 Jan 2019</td>
                                    <td>08.30</td>
                                    <td>-</td>
                                    <td>Pengajuan Jadwal</td>
                                    <td>
                                      <a href="<?php echo site_url();?>dosen/JadwalSeminar/verifikasiJadwal">
                                        <button type="button" class="btn btn-primary">
                                          Verifikasi
                                        </button>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>J3D113060</td>
                                    <td>Deny</td>
                                    <td>Walidatush Sholihah, SSi, MKom</td>
                                    <td>Jaringan</td>
                                    <td>20 Jan 2019</td>
                                    <td>12.00</td>
                                    <td>-</td>
                                    <td>Pengajuan Jadwal</td>
                                    <td>
                                      <a href="">
                                        <button type="button" class="btn btn-primary">
                                          Verifikasi
                                        </button>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </section>
                          </div>
                         </div>
                 <!-- tab 2 -->
                      <div class="tab-pane" id="tab_2">
                        <div class="box-body">
                          <small>
                            *Status Mahasiswa dapat dikatakan 'Sudah Seminar' apabila sudah memenuhi semua syarat seminar (Dokumen dan Nilai)
                          </small>
                          <section class="content">
                            <table id="example1" class="display table-bordered table-striped table-hover" style="width:100%">
                              <thead>
                                <tr>
                                  <th>NIM</th>
                                  <th>Nama Lengkap</th>
                                  <th>Pembimbing</th>
                                  <th>Kajian</th>
                                  <th>Tanggal Seminar</th>
                                  <th>Waktu Seminar</th>
                                  <th>Ruang</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>J3D113066</td>
                                  <td>Raply</td>
                                  <td>Walidatush Sholihah, SSi, MKom</td>
                                  <td>Hardware</td>
                                  <td>20 Jan 2019</td>
                                  <td>08.30</td>
                                  <td>CA K01</td>
                                  <td>Proses Seminar</td>
                                  <td>
                                    <a href="">
                                      <button type="button" class="btn btn-success">
                                        Ubah Status
                                      </button>
                                    </a>
                                    <a href="">
                                      <button type="button" class="btn btn-primary">
                                        Ubah Jadwal
                                      </button>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>J3D113060</td>
                                  <td>Deny</td>
                                  <td>Walidatush Sholihah, SSi, MKom</td>
                                  <td>Jaringan</td>
                                  <td>20 Jan 2019</td>
                                  <td>12.00</td>
                                  <td>CB Server</td>
                                  <td>Sudah Seminar</td>
                                  <td>
                                    <a href="" disabled="disabled">
                                      <button type="button" class="btn btn-success" disabled="disabled">
                                        Ubah Status
                                      </button>
                                    </a>
                                    <a href="">
                                      <button type="button" class="btn btn-primary" disabled="disabled">
                                        Ubah Jadwal
                                      </button>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </section>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab_3">
                        <div class="box-body">
                          <section class="content">
                            <table id="example2" class="display table-bordered table-striped table-hover" style="width:100%">
                              <thead>
                                <tr>
                                  <th>NIM</th>
                                  <th>Nama Lengkap</th>
                                  <th>Pembimbing</th>
                                  <th>Kajian</th>
                                  <th>Tanggal Seminar</th>
                                  <th>Waktu Seminar</th>
                                  <th>Keterangan</th>
                                  <th>Status</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>J3D113066</td>
                                  <td>Raply</td>
                                  <td>Walidatush Sholihah, SSi, MKom</td>
                                  <td>Hardware</td>
                                  <td>20 Jan 2019</td>
                                  <td>08.30</td>
                                  <td>Pendaftaran seminar minimal 2 hari sebelum rencana jadwal seminar</td>
                                  <td>Tidak Terverifikasi</td>
                                  <td>
                                    <a href="">
                                      <button type="button" class="btn btn-primary">
                                        Verifikasi
                                      </button>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>J3D113060</td>
                                  <td>Deny</td>
                                  <td>Walidatush Sholihah, SSi, MKom</td>
                                  <td>Jaringan</td>
                                  <td>20 Jan 2019</td>
                                  <td>12.00</td>
                                  <td>Dokumen syarat seminar belum lengkap</td>
                                  <td>Tidak Terverifikasi</td>
                                  <td>
                                    <a href="">
                                      <button type="button" class="btn btn-primary">
                                        Verifikasi
                                      </button>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </section>
                        </div>
                      </div>
<!-- modal -->
          </div>
         </div>
      </div>
    </div>
  </section>
</div>
			<!-- /.box-body -->
<script>
$(document).ready(function() {
  // Setup - add a text input to each footer cell
  $('#example thead tr').clone(true).appendTo( '#example thead' );
  $('#example thead tr:eq(1) th').each( function (i) {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

      $( 'input', this ).on( 'keyup change', function () {
          if ( table.column(i).search() !== this.value ) {
              table
                  .column(i)
                  .search( this.value )
                  .draw();
          }
      } );
  } );

  var table = $('#example').DataTable( {
      orderCellsTop: true,
      fixedHeader: true
  } );
} );
</script>
<script>
$(document).ready(function() {
  // Setup - add a text input to each footer cell
  $('#example1 thead tr').clone(true).appendTo( '#example1 thead' );
  $('#example1 thead tr:eq(1) th').each( function (i) {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

      $( 'input', this ).on( 'keyup change', function () {
          if ( table.column(i).search() !== this.value ) {
              table
                  .column(i)
                  .search( this.value )
                  .draw();
          }
      } );
  } );

  var table = $('#example1').DataTable( {
      orderCellsTop: true,
      fixedHeader: true
  } );
} );
</script>
<script>
$(document).ready(function() {
  // Setup - add a text input to each footer cell
  $('#example2 thead tr').clone(true).appendTo( '#example2 thead' );
  $('#example2 thead tr:eq(1) th').each( function (i) {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

      $( 'input', this ).on( 'keyup change', function () {
          if ( table.column(i).search() !== this.value ) {
              table
                  .column(i)
                  .search( this.value )
                  .draw();
          }
      } );
  } );

  var table = $('#example2').DataTable( {
      orderCellsTop: true,
      fixedHeader: true
  } );
} );
</script>
<script>
	var columns = [];
</script>
<script>
	/* jQueryKnob */
	$('.knob').knob();
</script>
<?php
  $this->load->view('dosen/footer');
?>
