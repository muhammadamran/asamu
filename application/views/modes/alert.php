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
		toastr.success("Data saved successfully!","Information", {
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
		toastr.error("Data delete successfully!","Information", {
			'closeButton': true,
			'newestOnTop': false,
			'progressBar': true,
			'positionClass': "toast-top-right"
		})
	}
</script>
<button type="button" id="clickButtonError" class="btn btn-sm btn-danger" onclick="error()" style="display:none">Error</button>
<?php endif; ?>