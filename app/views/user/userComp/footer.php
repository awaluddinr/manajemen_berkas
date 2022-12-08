</div>
<!-- *************
				************ Main container end *************
			************* -->


<!-- Footer start -->
<footer class="main-footer">© Wafi 2020</footer>
<!-- Footer end -->

</div>
<!-- Container fluid end -->



<!-- *************
			************ Required JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>/js/moment.js"></script>


<!-- *************
			************ Vendor Js Files *************
		************* -->
<!-- Slimscroll JS -->
<script src="<?= BASEURL; ?>/vendors/slimscroll/slimscroll.min.js"></script>
<script src="<?= BASEURL; ?>/vendors/slimscroll/custom-scrollbar.js"></script>
<script>
	$("form").on("change", ".file-upload-field", function() {
		$(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
	});
</script>

<!-- <script>
	$(document).ready(function() {
		getdata();

		$('#upload_form').on('submit', function(e) {
			e.preventDefault();
			if ($('#image_file').val() == '') {
				alert("Please Select the File");
			} else {
				$.ajax({
					url: "<?php echo URL; ?>/User/rekap_upload/",
					method: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						$('#uploaded_image').html(data);
						getdata()
					}
				});

			}

		});

		function getdata() {
			$.ajax({
				type: "POST",
				url: "<?php echo URL; ?>/User/rekap_show/",
				success: function(data) {
					// console.log(data);
					$('#uploaded_image').html(data);
				}
			});
		}
	});
</script> -->

<script>

</script>

<script>
	var listVideo = document.querySelectorAll('.video-list .vid');
	var mainVideo = document.querySelector('.main-video video');
	var title = document.querySelector('.main-video .title');
	var dot = document.querySelectorAll('.dots').forEach(titik => {
		titik.style.color = 'rgb(191, 191, 191)';
	});

	listVideo.forEach(video => {
		video.onclick = () => {
			listVideo.forEach(vid => vid.classList.remove('aktive'));
			video.classList.add('aktive');
			if (video.classList.contains('aktive')) {
				let src = video.children[0].getAttribute('src');
				mainVideo.src = src;
				let text = video.children[1].innerHTML;
				title.innerHTML = text;
			}
		}
	});
</script>

<!-- Daterange -->
<script src="<?= BASEURL; ?>/vendors/daterange/daterange.js"></script>
<script src="<?= BASEURL; ?>/vendors/daterange/custom-daterange.js"></script>
<!-- Custom Data tables -->
<script src="<?= BASEURL; ?>/vendor/datatables/custom/custom-datatables.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/custom/fixedHeader.js"></script>

<script src="<?= BASEURL; ?>/vendors/datatables/dataTables.min.js"></script>
<script src="<?= BASEURL; ?>/vendors/datatables/dataTables.bootstrap.min.js"></script>
<!-- Download / CSV / Copy / Print -->
<script src="<?= BASEURL; ?>/vendors/datatables/buttons.min.js"></script>
<script src="<?= BASEURL; ?>/vendors/datatables/jszip.min.js"></script>
<!-- <script src="<?= BASEURL; ?>/vendors/datatables/pdfmake.min.js"></script> -->
<script src="<?= BASEURL; ?>/vendors/datatables/vfs_fonts.js"></script>
<script src="<?= BASEURL; ?>/vendors/datatables/html5.min.js"></script>
<script src="<?= BASEURL; ?>/vendors/datatables/buttons.print.min.js"></script>


<script src="<?= BASEURL; ?>/vendors/dropify/js/dropify.min.js"></script>

<!-- Gallery JS -->
<script src="<?= BASEURL; ?>/vendors/gallery/baguetteBox.js" async></script>
<script src="<?= BASEURL; ?>/vendors/gallery/plugins.js" async></script>
<script src="<?= BASEURL; ?>/vendors/gallery/custom-gallery.js" async></script>

<script src="<?= BASEURL; ?>/js/media-gallery-page.min.js"></script>
<script src="<?= BASEURL; ?>/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>


<script src="<?= BASEURL; ?>/vendors/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- <script src="<?= BASEURL; ?>/vendors/dropzone/dropzone.js"></script> -->


<!-- Main Js Required -->
<script src="<?= BASEURL; ?>/js/main-u.js"></script>
<script src="<?= BASEURL; ?>/js/scriptUser.js"></script>
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/particles/particles.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/particles/particles-custom-error.js"></script>

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
			$('.modalDeleteFolder').bmcModal();
			$('.modalInfo').bmcModal();
			$('.modalsukses').bmcModal();
			$('.modalFolder').bmcModal();
			$('.modalDelete').bmcModal();
			$('.modalDeleteAud').bmcModal();
			$('.modalDeleteVid').bmcModal();
			$('.modalsuksesHapusfolder').bmcModal();
			$('.modalsuksesEditfolder').bmcModal();
			$('.modalgagalEditfolder').bmcModal();
			$('.modalsuksesAddfolder').bmcModal();
			$('.modalgagalAddfolder').bmcModal();
			$('.modalsuksesImgDel').bmcModal();
			$('.modalsuksesImgedit').bmcModal();
			$('.modaledit').bmcModal();
			$('.modalgagalImgedit').bmcModal();
			$('.modalsuksesVidDel').bmcModal();
			$('.modalsuksesVidedit').bmcModal();
			$('.modalgagalVidedit').bmcModal();
			$('.modalsuksesAudDel').bmcModal();
			$('.modalsuksesAudedit').bmcModal();
			$('.modalgagalAudedit').bmcModal();
			$('.modalsuksesHapus').bmcModal();
			$('.modalGambar').bmcModal();
			$('.modalAudio').bmcModal();
			$('.modaleditAud').bmcModal();
			$('.modalVideo').bmcModal();
			$('.modalInfoGambar').bmcModal();
			$('.AudmodalDelete').bmcModal();
			$('.modalAudioInfo').bmcModal();
			$('.modalVideoInfo').bmcModal();
			$('.modaleditVid').bmcModal();
			$('.modalfolderEdit').bmcModal();
			$('.modalDeleteTrash').bmcModal();
			$('.modalDeleteTrashFolder').bmcModal();
			$('.modalUnggahVideo').bmcModal();
		})
	})(jQuery);
</script>

<?php if (isset($_SESSION['folder'])) : ?>
	<script>
		$('.modalsuksesHapusfolder').modal('show');
	</script>
	<?php unset($_SESSION['folder']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['edit'])) : ?>
	<script>
		$('.modalsuksesEditfolder').modal('show');
	</script>
	<?php unset($_SESSION['edit']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['editgagal'])) : ?>
	<script>
		$('.modalgagalEditfolder').modal('show');
	</script>
	<?php unset($_SESSION['editgagal']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['suksesfolder'])) : ?>
	<script>
		$('.modalsuksesAddfolder').modal('show');
	</script>
	<?php unset($_SESSION['suksesfolder']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagalfolder'])) : ?>
	<script>
		$('.modalgagalAddfolder').modal('show');
	</script>
	<?php unset($_SESSION['gagalfolder']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['suksesImgdel'])) : ?>
	<script>
		$('.modalsuksesImgDel').modal('show');
	</script>
	<?php unset($_SESSION['suksesImgdel']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['sukseseditImg'])) : ?>
	<script>
		$('.modalsuksesImgedit').modal('show');
	</script>
	<?php unset($_SESSION['sukseseditImg']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagaleditImg'])) : ?>
	<script>
		$('.modalgagalImgedit').modal('show');
	</script>
	<?php unset($_SESSION['gagaleditImg']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['suksesViddel'])) : ?>
	<script>
		$('.modalsuksesVidDel').modal('show');
	</script>
	<?php unset($_SESSION['suksesViddel']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['sukseseditVid'])) : ?>
	<script>
		$('.modalsuksesVidedit').modal('show');
	</script>
	<?php unset($_SESSION['sukseseditVid']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagaleditVid'])) : ?>
	<script>
		$('.modalgagalVidedit').modal('show');
	</script>
	<?php unset($_SESSION['gagaleditVid']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['suksesAuddel'])) : ?>
	<script>
		$('.modalsuksesAudDel').modal('show');
	</script>
	<?php unset($_SESSION['suksesAuddel']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['sukseseditAud'])) : ?>
	<script>
		$('.modalsuksesAudedit').modal('show');
	</script>
	<?php unset($_SESSION['sukseseditAud']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['gagaleditAud'])) : ?>
	<script>
		$('.modalgagalAudedit').modal('show');
	</script>
	<?php unset($_SESSION['gagaleditAud']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['sampah'])) : ?>
	<script>
		$('.modalsuksesHapus').modal('show');
	</script>
	<?php unset($_SESSION['sampah']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['pulih'])) : ?>
	<script>
		$('.modalsuksesHapus').modal('show');
	</script>
	<?php unset($_SESSION['pulih']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['hapusfoldertrash'])) : ?>
	<script>
		$('.modalsuksesHapusfolder').modal('show');
	</script>
	<?php unset($_SESSION['hapusfoldertrash']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['filesHapus'])) : ?>
	<script>
		$('.modalsukses').modal('show');
	</script>
	<?php unset($_SESSION['filesHapus']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['pesan'])) : ?>
	<script>
		$('.modalsukses').modal('show');
	</script>
	<?php unset($_SESSION['pesan']); ?>
<?php endif; ?>

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

<script type="text/javascript">
	Dropzone.options.myGreatDropzone = {
		autoProcessQueue: false,
		acceptedFiles: ".jpeg,.jpg,.png,.gif,.tiff,.mp4,.MOV,.MTS,.mkv,.avi,.mp3,.wav,.aac,.wma,.pcm,.flac,.aiff,.ogg",
		parallelUploads: 20,
		filesizeBase: 1024,
		chunking: false,
		chunkSize: 5000000,
		dictDefaultMessage: "Seret File kesini atau Klik untuk Unggah",
		addRemoveLinks: true,
		dictRemoveFile: "Hapus file",
		type: "POST",
		maxFilesize: 956,
		dictCancelUpload: null,
		init: function() {
			var button = document.querySelector('#uploadfiles');
			myDropzone = this;
			button.addEventListener("click", function() {
				myDropzone.processQueue();
			})
			myDropzone.on("complete", function() {
				this.removeAllFiles();
				setTimeout(function() {
					window.location.href = "http://localhost/manajemen-file/User/folder_create"
				}, 800);
			});

		}
	};

	list_Image();

	function list_Image() {
		var fdr = $('#fdr').val();
		// var folder = $('.rjb').data('dir');
		// var fdr = $('.rjb').data('awal');

		// var tmp = "assets/media/" + fdr + "/" + folder + "/";
		$.ajax({
			url: "http://localhost/manajemen-file/User/pageFolderView",
			type: 'POST',
			dataType: 'json',
			data: {
				fdr: fdr
			},
			success: function(data) {
				$('#preview').html(data);
			}
		});
	};
</script>

<script>
	Dropzone.options.imageDrop = {
		autoProcessQueue: false,
		acceptedFiles: ".jpeg,.jpg,.png,.gif,.tiff",
		dictDefaultMessage: "Seret File kesini atau Klik untuk Unggah",
		addRemoveLinks: true,
		dictRemoveFile: "Hapus file",
		dictCancelUpload: null,
		maxFiles: 1,
		thumbnailWidth: 520,
		thumbnailHeight: 420,
		paramName: "uploadImg",
		init: function() {
			var button = document.querySelector('#tombolImg');
			myDropzone = this;
			button.addEventListener("click", function() {
				"<?php $_SESSION['berhasil'] = 'Data Berhasil Diupload'; ?>"
				myDropzone.processQueue();
			})
			myDropzone.on("complete", function() {
				this.removeAllFiles();
			});

			myDropzone.on("success", function(file) {
				"<?php if (isset($_SESSION['berhasil'])) : ?>"
				$('.modalsukses').modal('show');
				setTimeout(function() {
					window.location.href = "http://localhost/manajemen-file/User/pageImage"
				}, 2800);
				"<?php unset($_SESSION['berhasil']); ?>"
				"<?php endif; ?>"
			});
		}
	}

	Dropzone.options.videoDrop = {
		autoProcessQueue: false,
		acceptedFiles: ".mp4,.MOV,.MTS,.avi,.mkv",
		dictDefaultMessage: "Seret File kesini atau Klik untuk Unggah",
		addRemoveLinks: true,
		dictRemoveFile: "Hapus file",
		dictCancelUpload: null,
		maxFiles: 1,
		thumbnailWidth: 520,
		thumbnailHeight: 420,
		paramName: "uploadVideo",
		init: function() {
			var button = document.querySelector('#tombolVid');
			myDropzone = this;
			button.addEventListener("click", function() {
				"<?php $_SESSION['berhasil'] = 'Data Berhasil Diupload'; ?>"
				myDropzone.processQueue();
			})
			myDropzone.on("complete", function() {
				this.removeAllFiles();
			});

			myDropzone.on("success", function(file) {
				"<?php if (isset($_SESSION['berhasil'])) : ?>"
				$('.modalsukses').modal('show');
				setTimeout(function() {
					window.location.href = "http://localhost/manajemen-file/User/rekapvideo"
				}, 2800);
				"<?php unset($_SESSION['berhasil']); ?>"
				"<?php endif; ?>"
			});
		}
	}

	Dropzone.options.videoAkhir = {
		autoProcessQueue: false,
		acceptedFiles: ".mp4,.MOV,.MTS,.avi,.mkv",
		dictDefaultMessage: "Seret File kesini atau Klik untuk Unggah",
		addRemoveLinks: true,
		dictRemoveFile: "Hapus file",
		dictCancelUpload: null,
		maxFiles: 1,
		thumbnailWidth: 520,
		thumbnailHeight: 420,
		paramName: "uploadVid",
		init: function() {
			var button = document.querySelector('#tombolVid');
			myDropzone = this;
			button.addEventListener("click", function() {
				"<?php $_SESSION['berhasil'] = 'Data Berhasil Diupload'; ?>"
				myDropzone.processQueue();
			})
			myDropzone.on("complete", function() {
				this.removeAllFiles();
				"<?php if (isset($_SESSION['berhasil'])) : ?>"
				$('.modalsukses').modal('show');
				setTimeout(function() {
					window.location.href = "http://localhost/manajemen-file/User/rekap_video"
				}, 1800);
				"<?php unset($_SESSION['berhasil']); ?>"
				"<?php endif; ?>"
			});
		}
	}

	Dropzone.options.audioDrop = {
		autoProcessQueue: false,
		acceptedFiles: ".mp3,.wav,.aac,.wma,.pcm,.flac,.aiff,.ogg",
		dictDefaultMessage: "Seret File kesini atau Klik untuk Unggah",
		addRemoveLinks: true,
		dictRemoveFile: "Hapus file",
		dictCancelUpload: null,
		maxFiles: 1,
		thumbnailWidth: 520,
		thumbnailHeight: 420,
		paramName: "uploadAudio",
		init: function() {
			var button = document.querySelector('#tombolAud');
			myDropzone = this;
			button.addEventListener("click", function() {
				"<?php $_SESSION['berhasil'] = 'Data Berhasil Diupload'; ?>"
				myDropzone.processQueue();
			})
			myDropzone.on("complete", function() {
				this.removeAllFiles();
			});

			myDropzone.on("success", function(file) {
				"<?php if (isset($_SESSION['berhasil'])) : ?>"
				$('.modalsukses').modal('show');
				setTimeout(function() {
					window.location.href = "http://localhost/manajemen-file/User/pageAudio"
				}, 1800);
				"<?php unset($_SESSION['berhasil']); ?>"
				"<?php endif; ?>"
			});
		}
	}
</script>

<!-- folder info -->
<script>
	$(document).ready(function() {
		$(document).on('click', '#detail', function() {
			var namaFolder = $(this).data('folder');
			var tanggal = $(this).data('tanggal');
			var total = $(this).data('total');
			var size = $(this).data('size');

			$('#Foldernama').text(namaFolder);
			$('#tanggal').text(tanggal);
			$('#total').text(total);
			$('#size').text(size);


		})
		// dropify
		$('.dropify').dropify();

		$('.deletebtn').on('click', function() {
			$('.deleteModal').modal('show');

			var idGambar = $(this).data('gambar');

			$('#gambarId').val(idGambar);
		});

		$(document).on('click', '.deletebtnVid', function() {
			$('.modalDeleteVid').modal('show');

			var idVideo = $(this).data('video');

			$('#videoId').val(idVideo);
		});

		$(document).on('click', '.deletebtnAud', function() {
			$('.modalDeleteAud').modal('show');

			var idAudio = $(this).data('audio');

			$('#audioId').val(idAudio);
		});

		$(document).on('click', '.gambarbtn', function() {
			$('.modalGambar').modal('show');
			var namaGambar = $(this).data('gambar');
			var tanggalGambar = $(this).data('tanggal');
			var ukuran = $(this).data('size');

			$('#Gambarnama').text(namaGambar);
			$('#tanggal').text(tanggalGambar);
			$('#size').text(ukuran);

		})

		$(document).on('click', '.videobtn', function() {
			$('.modalVideo').modal('show');
			var namaVideo = $(this).data('video');
			var tanggalVideo = $(this).data('tanggal');
			var ukuran = $(this).data('size');

			$('#Videonama').text(namaVideo);
			$('#tanggal').text(tanggalVideo);
			$('#size').text(ukuran);

		})

		$(document).on('click', '.audiobtn', function() {
			$('.modalAudio').modal('show');
			var namaAudio = $(this).data('audio');
			var tanggalAudio = $(this).data('tanggal');
			var ukuran = $(this).data('size');

			$('#Audionama').text(namaAudio);
			$('#tanggal').text(tanggalAudio);
			$('#size').text(ukuran);

		})

		$(document).on('click', '.editbtn', function() {
			$('.modaledit').modal('show');
			var GambarId = $(this).data('idgambar');
			var info = $(this).data('edit');

			$('#editId').val(GambarId);
			$('#infoGambar').val(info);

		})

		$(document).on('click', '.Videditbtn', function() {
			$('.modaleditVid').modal('show');
			var VideoId = $(this).data('idvideo');
			var info = $(this).data('edit');

			$('#editIdVid').val(VideoId);
			$('#infoVideo').val(info);

		})

		$(document).on('click', '.editbtnAud', function() {
			$('.modaleditAud').modal('show');
			var AudioId = $(this).data('idaudio');
			var info = $(this).data('edit');

			$('#editIdAud').val(AudioId);
			$('#editAudio').val(info);

		})

		$('.foldertrash').on('click', function(e) {
			e.preventDefault();
			$('.modalfolder').modal('show');
		})

		$("#upload").on("change", function() {
			$("#fileName").text($(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1])
		})

		$("#uploadAud").on("change", function() {
			$("#fileName").text($(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1])
		})

		$(document).on('click', '#hapus', function() {
			var folderId = $(this).data('id');

			$('#folderId').val(folderId);
		})

		$('.unggah').on('click', function() {
			$('.modalUnggah').modal('show');
			var namaFolder = $(this).data('fol');
			var idFolder = $(this).data('idfolder');
			var fdr = $(this).data('dir');

			$('#iniIdFolder').val(idFolder);
			$('#iniFolder').val(namaFolder);
			$('#namaFdr').text(fdr);
		})

		$(document).on('click', '.trashFolderDel', function() {
			var id = $(this).data('id');
			$('#folderIdtrash').val(id);
		})

		$(document).on('click', '.btnfolderEdit', function() {
			$('.modalfolderEdit').modal('show');

			var folderId = $(this).data('id');
			var folderNama = $(this).data('folder');

			$('#editId').val(folderId);
			$('#editFolder').val(folderNama);
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

		$('.playtrash').on('click', function() {
			$('.modalplaytrash').modal({
				backdrop: 'static',
				keyboard: true,
				show: true
			});
			var video = $(this).data('video');
			var capt = $(this).data('caption')

			$('#player').attr('src', video);
			$('#caption').text(capt);
		});

		$('.closetrash').on('click', function() {
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

		$('.playAudtrash').on('click', function() {
			$('.modalplayAudtrash').modal({
				backdrop: 'static',
				keyboard: true,
				show: true
			});
			var audio = $(this).data('audio');
			var capt = $(this).data('caption')

			$('.playerAud').attr('src', audio);
			$('.captionAud').text(capt);
		});

		$('.closeAudtrash').on('click', function() {
			$('.playerAud').attr('src', '');
			$('.captionAud').text('');
		});

		$(document).on('click', '.edit', function() {
			$('.modaledit').modal('show');

			var id = $(this).data('idgambar');
			var idFolder = $(this).data('idfolder');
			var folder = $(this).data('folder');
			var nama = $(this).data('edit');

			$('#editIdImg').val(id);
			$('#fdrId').val(idFolder);
			$('#namaFolder').val(folder);
			$('#infoGambar').val(nama);

		});

		$(document).on('click', '#hapusImgbtn', function() {
			var id = $(this).data('gambar');
			var idFolder = $(this).data('idfdr');
			var folder = $(this).data('fdr');

			$('#gambarId').val(id);
			$('#folderId').val(idFolder);
			$('#namafdr').val(folder);
		})

		$(document).on('click', '.gambarInfo', function() {
			$('.modalInfoGambar').modal('show');

			var nama = $(this).data('gambar');
			var tanggal = $(this).data('tanggal');
			var ukuran = $(this).data('size');
			var folder = $(this).data('fdr');

			$('#imgFolder').text(nama);
			$('#tanggalImg').text(tanggal);
			$('#sizeImg').text(ukuran);
			$('#dirImg').text(folder);
		});

		$(document).on('click', '.editbtnVid', function() {
			$('.modaleditVid').modal('show');

			var VideoId = $(this).data('idvideo');
			var info = $(this).data('edit');
			var idFolder = $(this).data('idfolder');
			var folder = $(this).data('folder');

			$('#editIdVid').val(VideoId);
			$('#fdrNama').val(folder);
			$('#fdrId').val(idFolder);
			$('#infoVideo').val(info);

		});

		$(document).on('click', '.Viddeletebtn', function() {
			$('.modalDeleteVid').modal('show');

			var VideoId = $(this).data('video');
			var idFolder = $(this).data('idfdr');
			var folder = $(this).data('fdr');

			$('#videoId').val(VideoId);
			$('#folderNamaVid').val(folder);
			$('#idfolderVid').val(idFolder);

		});

		$(document).on('click', '.videobtnInfo', function() {
			$('.modalVideoInfo').modal('show');

			var nama = $(this).data('video');
			var tanggal = $(this).data('tanggal');
			var ukuran = $(this).data('size');
			var folder = $(this).data('folder');

			$('#namavid').text(nama);
			$('#tanggalvid').text(tanggal);
			$('#sizevid').text(ukuran);
			$('#dirvid').text(folder);
		});

		$(document).on('click', '.Audeditbtn', function() {
			$('.modaleditAud').modal('show');

			var audioId = $(this).data('idaudio');
			var info = $(this).data('edit');
			var idFolder = $(this).data('idfolder');
			var folder = $(this).data('folder');

			$('#AudeditId').val(audioId);
			$('#namafolderAud').val(folder);
			$('#idfolderAud').val(idFolder);
			$('#editFAudio').val(info);

		});

		$(document).on('click', '.Auddeletebtn', function() {
			$('.AudmodalDelete').modal('show');

			var audioId = $(this).data('audio');
			var idFolder = $(this).data('idfolder');
			var folder = $(this).data('folder');

			$('#audDelid').val(audioId);
			$('#audfolnama').val(folder);
			$('#audfolid').val(idFolder);

		});

		$(document).on('click', '.audiobtninfo', function() {
			$('.modalAudioInfo').modal('show');

			var nama = $(this).data('audio');
			var tanggal = $(this).data('tanggal');
			var ukuran = $(this).data('size');
			var folder = $(this).data('folder');

			$('#audnama').text(nama);
			$('#audtanggal').text(tanggal);
			$('#audsize').text(ukuran);
			$('#auddir').text(folder);
		});

		$(document).on("click", '.deletebtnFiles', function() {
			$('.modalDeleteTrash').modal('show');

			var idFiles = $(this).data('files');

			$('#filesId').val(idFiles);
		});

		$(document).on("click", '.deletebtnFol', function() {
			$('.modalDeleteTrashFolder').modal('show');

			var Filesid = $(this).data('files');
			var direk = $(this).data('direk')

			$('#idFiles').val(Filesid);
			$('#direktori').val(direk);

		});

		$(document).on("click", '.unggahVideo', function() {
			$('.modalUnggahVideo').modal('show');

		});

	});
</script>

</body>

</html>