</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('public/assets/js/app.js') ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	function alertDelete(nim, nama) {
		Swal.fire({
			title: 'Delete this data',
			text: nim + ' - ' + nama,
			icon: 'warning',
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!',
			customClass: {
				confirmButton: 'btn btn-danger ms-2',
				cancelButton: 'btn btn-secondary',
			},
			reverseButtons: true,
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: './mahasiswa/delete?nim='+nim,
					type: 'GET',
					error: function(data) {
						Swal.fire('Something Gone Wrong!', 'Please try again for a few minutes.', 'error')
					},
					success: function(data) {
						Swal.fire('Delete Success', '', 'success')
					}
				})
			}
		})
	}
</script>

</body>

</html>
