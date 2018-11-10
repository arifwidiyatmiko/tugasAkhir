
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 1.0.0
		</div>
		<strong>@2018 Sekolah Vokasi IPB.</strong> Hak cipta dilindungi Undang-Undang
	</footer>
</div>

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-Buttons-1.5.2/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-JSZip-2.5.0/jszip.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables.net-Buttons-1.5.2/js/buttons.html5.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url()?>assets/plugins/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/plugins/fastclick/lib/fastclick.js"></script>
<!-- Chosen -->
<script src="<?= base_url()?>assets/plugins/chosen/chosen.jquery.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/scripts/adminlte.min.js"></script>
<!-- SELECT 2 -->
<script src="<?= base_url()?>assets/plugins/select2/select2.min.js"></script>
 <!-- LEAFLET -->

<script type="text/javascript">
	$(function(){
		$(".toggle-expand-btn").click(function (e) {
			$(this).closest('.box').toggleClass('panel-fullscreen');
		});
	});
</script>


</body>
</html>

