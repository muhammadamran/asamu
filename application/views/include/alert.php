<?php if ($this->session->flashdata('s_sigin')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButton').click();
	}
	function info() {
		toastr.info("Anda telah berhasil login!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButton" class="btn btn-sm btn-info" onclick="info()" style="display:none">Success</button>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonSuccess').click();
	}
	function success() {
		toastr.success("Data berhasil disimpan!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonSuccess" class="btn btn-sm btn-success" onclick="success()" style="display:none">Success</button>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonError').click();
	}
	function error() {
		toastr.error("Data delete successfully!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonError" class="btn btn-sm btn-danger" onclick="error()" style="display:none">Error</button>
<?php endif; ?>

<?php if ($this->session->flashdata('filed')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonFiled').click();
	}
	function filed() {
		toastr.error("Data gagal Disimpan!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonFiled" class="btn btn-sm btn-danger" onclick="filed()" style="display:none">Filed</button>
<?php endif; ?>

<?php if ($this->session->flashdata('n_role')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonn_role').click();
	}
	function n_role() {
		toastr.error("Sorry you do not have access to enter into this system!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonn_role" class="btn btn-sm btn-danger" onclick="n_role()" style="display:none">n_role</button>
<?php endif; ?>

<?php if ($this->session->flashdata('gagal')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtongagal').click();
	}
	function gagal() {
		toastr.error("Username atau Email sudah tersedia, silahkan gunakan data lain!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtongagal" class="btn btn-sm btn-danger" onclick="gagal()" style="display:none">gagal</button>
<?php endif; ?>

<?php if ($this->session->flashdata('hapus')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonhapus').click();
	}
	function hapus() {
		toastr.warning("Data berhasil di hapus!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonhapus" class="btn btn-sm btn-danger" onclick="hapus()" style="display:none">hapus</button>
<?php endif; ?>

<?php if ($this->session->flashdata('changepass')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonchangepass').click();
	}
	function changepass() {
		toastr.info("Password berhasil di update!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonchangepass" class="btn btn-sm btn-danger" onclick="changepass()" style="display:none">changepass</button>
<?php endif; ?>

<?php if ($this->session->flashdata('nonaktif')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonnonaktif').click();
	}
	function nonaktif() {
		toastr.info("Status berhasil di Non-Aktif!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonnonaktif" class="btn btn-sm btn-danger" onclick="nonaktif()" style="display:none">nonaktif</button>
<?php endif; ?>

<?php if ($this->session->flashdata('aktif')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonaktif').click();
	}
	function aktif() {
		toastr.info("Status berhasil di Aktif!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonaktif" class="btn btn-sm btn-danger" onclick="aktif()" style="display:none">aktif</button>
<?php endif; ?>

<?php if ($this->session->flashdata('changerole')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonchangerole').click();
	}
	function changerole() {
		toastr.info("Hak Akses Users berhasil diganti!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonchangerole" class="btn btn-sm btn-danger" onclick="changerole()" style="display:none">changerole</button>
<?php endif; ?>

<?php if ($this->session->flashdata('changerole')): ?>
<script type="text/javascript">
	window.onload = function(){
		document.getElementById('clickButtonchangerole').click();
	}
	function changerole() {
		toastr.info("Hak Akses Users berhasil diganti!","Informasi", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonchangerole" class="btn btn-sm btn-danger" onclick="changerole()" style="display:none">changerole</button>
<?php endif; ?>