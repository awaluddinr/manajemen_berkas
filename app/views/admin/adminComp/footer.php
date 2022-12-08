</div>
<!-- Page content end -->

</div>
<!-- Page wrapper end -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>/js/moment.js"></script>
<script src="<?= BASEURL; ?>/js/ajax.js"></script>




<!-- *************
			************ Vendor Js Files *************
		************* -->
<!-- Slimscroll JS -->
<script src="<?= BASEURL; ?>/vendor/slimscroll/slimscroll.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Daterange -->
<script src="<?= BASEURL; ?>/vendor/daterange/daterange.js"></script>
<script src="<?= BASEURL; ?>/vendor/daterange/custom-daterange.js"></script>

<!-- Data Tables -->
<script src="<?= BASEURL; ?>/vendor/datatables/dataTables.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="<?= BASEURL; ?>/vendor/datatables/custom/custom-datatables.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/custom/fixedHeader.js"></script>

<!-- Download / CSV / Copy / Print -->
<script src="<?= BASEURL; ?>/vendor/datatables/buttons.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/jszip.min.js"></script>
<!-- <script src="<?= BASEURL; ?>/vendor/datatables/pdfmake.min.js"></script> -->
<script src="<?= BASEURL; ?>/vendor/datatables/vfs_fonts.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/html5.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/buttons.print.min.js"></script>


<!-- Gallery JS -->
<script src="<?= BASEURL; ?>/vendor/gallery/baguetteBox.js" async></script>
<script src="<?= BASEURL; ?>/vendor/gallery/plugins.js" async></script>
<script src="<?= BASEURL; ?>/vendor/gallery/custom-gallery.js" async></script>

<!-- Polyfill JS -->
<script src="<?= BASEURL; ?>/vendor/polyfill/polyfill.min.js"></script>

<!-- Apex Charts -->
<!-- <script src="<?= BASEURL; ?>/vendor/apex/apexcharts.min.js"></script> -->
<!-- <script src="<?= BASEURL; ?>/vendor/apex/sales/mixed-line-column.js"></script> -->
<!-- <script src="<?= BASEURL; ?>/vendor/apex/sales/column-visitors.js"></script> -->

<!-- Main JS -->
<script src="<?= BASEURL; ?>/js/main.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

<script>
	var header = document.getElementById("myDIV");
	var btns = header.getElementsByClassName("ini-link");
	for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function() {
			var current = document.getElementsByClassName("aktifed");
			current[0].className = current[0].className.replace(" aktifed", "");
			this.className += " aktifed";
		});
	}
</script>

<script>
	let uploadButton = document.getElementById("upload-button");
	let chosenImage = document.getElementById("chosen-image");
	let fileName = document.getElementById("file-name");

	uploadButton.onchange = () => {
		let reader = new FileReader();
		reader.readAsDataURL(uploadButton.files[0]);
		reader.onload = () => {
			chosenImage.setAttribute("src", reader.result);
		}
		fileName.textContent = uploadButton.files[0].name;
	}
</script>

<script>
	(function($) {
		$.fn.bmcModal = function() {
			var self = $(this);

			if (self.attr('data-animate-in')) {
				self.addClass('animate__animated');
				self.addClass(self.attr('data-animate-in'));
			}

			self.on('hide.bs.modal', function(event) {
					if (!self.attr('data-end-hide') && self.attr('data-animate-out')) {
						event.preventDefault();

						self.addClass(self.attr('data-animate-out'));
						if (self.attr('data-animate-in')) {
							self.removeClass(self.attr('data-animate-in'));
						}
					}
					self.removeAttr('data-end-hide');
				})
				.on('animationend', function() {
					if (self.attr('data-animate-out') && self.hasClass(self.attr('data-animate-out'))) {
						self.attr('data-end-hide', true);
						self.modal('hide');
						self.removeClass(self.attr('data-animate-out'));
						if (self.attr('data-animate-in')) {
							self.addClass(self.attr('data-animate-in'));
						}
					}
				})
		};

		$(document).ready(function() {
			$('.modalsuksesMasuk').bmcModal();
			$('.modalsuksestambah').bmcModal();
			$('.modalDeleteUser').bmcModal();
			$('.modalsuksesHapus').bmcModal();
			$('.modalgagalAdduser').bmcModal();
			$('.modalgagalEditprofile').bmcModal();
			$('.modalsuksesUbah').bmcModal();
			$('.modalgagalUbahPass').bmcModal();
			$('.modalsuksesUbahPass').bmcModal();
		})
	})(jQuery);
</script>

<?php if (isset($_SESSION['pesan'])) : ?>
	<script>
		$('.modalsuksesMasuk').modal('show');
	</script>
	<?php unset($_SESSION['pesan']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['suksesadd'])) : ?>
	<script>
		$('.modalsuksestambah').modal('show');
	</script>
	<?php unset($_SESSION['suksesadd']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['berhasilhapus'])) : ?>
	<script>
		$('.modalsuksesHapus').modal('show');
	</script>
	<?php unset($_SESSION['berhasilhapus']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagaladd'])) : ?>
	<script>
		$('.modalgagalAdduser').modal('show');
	</script>
	<?php unset($_SESSION['gagaladd']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagaledit'])) : ?>
	<script>
		$('.modalgagalEditprofile').modal('show');
	</script>
	<?php unset($_SESSION['gagaledit']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['suksesedit'])) : ?>
	<script>
		$('.modalsuksesUbah').modal('show');
	</script>
	<?php unset($_SESSION['suksesedit']); ?>
<?php endif; ?>
<?php if (isset($_SESSION['suksesubahPass'])) : ?>
	<script>
		$('.modalsuksesubahPass').modal('show');
	</script>
	<?php unset($_SESSION['suksesubahPass']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagalubahPass'])) : ?>
	<script>
		$('.modalsuksesUbahPass').modal('show');
	</script>
	<?php unset($_SESSION['gagalubahPass']); ?>
<?php endif; ?>


<script>
	$(document).ready(function() {
		$(document).on('click', '#detail', function() {
			var namaGambar = $(this).data('gambar');
			var tanggal = $(this).data('tanggal');
			var size = $(this).data('size');

			$('#gambarNama').text(namaGambar);
			$('#tanggal').text(tanggal);
			$('#size').text(size);
		})
		$(document).on('click', '.deleteUser', function() {
			var id = $(this).data('userid');

			$('#userId').val(id);
		})

		$('.play').on('click', function() {
			$('.modalplay').modal({
				backdrop: 'static',
				keyboard: true,
				show: true
			});
			var video = $(this).data('video');
			var capt = $(this).data('caption')

			$('#player').attr('src', video);
			$('#caption').text(capt);
		});

		$('.close').on('click', function() {
			$('#player').attr('src', '');
			$('#caption').text('');

		});

		$('.playAud').on('click', function() {
			$('.modalplayAud').modal({
				backdrop: 'static',
				keyboard: true,
				show: true
			});
			var audio = $(this).data('audio');
			var capt = $(this).data('caption')

			$('.playerAud').attr('src', audio);
			$('.captionAud').text(capt);
		});

		$('.close').on('click', function() {
			$('.playerAud').attr('src', '');
			$('.captionAud').text('');
		});

	});
</script>

<script>
	$(document).ready(function() {
		$('#jpgTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "",
				sInfoEmpty: "",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});
		$('#pngTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "",
				sInfoEmpty: "",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});
		$('#jpegTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});
		$('#gifTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});

		$('#tiffTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});

		$('#pcmTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});

		$('#flacTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});

		$('#aiffTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});

		$('#oggTable').DataTable({
			oLanguage: {
				oAria: {
					sSortAscending: ": activate to sort column ascending",
					sSortDescending: ": activate to sort column descending"
				},
				oPaginate: {
					sFirst: "Pertama",
					sLast: "Terakhir",
					sNext: "Selanjutnya",
					sPrevious: "Sebelumnya"
				},
				sEmptyTable: "Data Masih Kosong",
				sInfo: "Menampilkan _START_ Sampai _END_ Dari Total _TOTAL_ Data ",
				sInfoEmpty: "Menampilkan 0 Sampai 0 Dari Total 0 Data",
				sInfoFiltered: "(filtered from _MAX_ total entries)",
				sInfoPostFix: "",
				sDecimal: "",
				sThousands: ",",
				sLengthMenu: "Tampilkan _MENU_ Data Per Halaman",
				sLoadingRecords: "Loading...",
				sProcessing: "Processing...",
				sSearch: "Cari:",
				sSearchPlaceholder: "",
				sUrl: "",
				sZeroRecords: "Kata Yang Dicari Tidak Ditemukan"
			},
		});


	});
</script>


</body>

</html>