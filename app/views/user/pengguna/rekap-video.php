<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">

    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Manajemen File</li>
            <li class="breadcrumb-item active">Video Akhir Tahun</li>
        </ol>

        <ul class="app-actions">
            <li class="d-flex align-items-center">
                <button class="btn shadow-sm border-0 d-flex align-items-center unggahVideo" data-toggle="modal" data-target=".modalUnggahVideo">
                    <span class="my-auto">Unggah Video</span>
                    <i class="icon-upload1 ml-1 text-white my-auto" style="font-size: 18px; color: #02a7ef;"></i>
                </button>
            </li>
        </ul>
    </div>
    <!-- Page header end -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12 mt-4 px-3 mb-5">
                <form action="<?= URL; ?>/User/pageImage_search" method="POST">
                    <div class="custom-search d-flex justify-content-center ">
                        <div class="input-group col-xl-8 py-1">
                            <input type="text" name="cariGambar" class="form-control" placeholder="cari video disini">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="tombolCari" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gutters text-center d-flex mt-3">
            <?php foreach ($data['videoAkhir'] as $video) : ?>
                <div class="mb-0">
                    <div class="col-xl-12 col-lg-12 col-md-3 col-sm-4 col-6">
                        <i class="icon-dots-three-vertical position-absolute dot" style="z-index: 1; top: 3px; right: -302px; cursor: pointer; font-size: 16px;" id="buttonsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="buttonsDropdown">
                            <li>
                                <form action="<?= URL; ?>/User/downloadVideo/" method="POST">
                                    <input type="hidden" name="videoUser" value="<?= $video['namaVideo']; ?>">
                                    <button class="dropdown-item border-0 m-0 d-flex justify-content-between">
                                        <span class="my-auto">Download</span>
                                        <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between Videditbtn" data-toggle="modal" data-target=".modaleditVid" data-edit="<?= $video['infoVideo']; ?>" data-idvideo="<?= $video['id']; ?>" href="buttons.html">
                                    <span class="my-auto">Sunting</span>
                                    <i class="icon-pencil text-warning" style="font-size: 18px;"></i>
                                </a>
                            </li>
                            <li>
                                <button class="dropdown-item border-0 m-0 d-flex justify-content-between deletebtnVid" data-toggle="modal" data-target=".modalDeleteVid" data-video="<?= $video['id']; ?>">
                                    <span class="my-auto">Hapus</span>
                                    <i class="icon-delete text-danger" style="font-size: 18px;"></i>
                                </button>
                            </li>
                            <li>
                                <a class="dropdown-item border-0 m-0 d-flex justify-content-between videobtn" data-toggle="modal" data-target=".modalVideo" href="buttons.html" id="detail" data-tanggal="<?= date('d M Y H:i', strtotime($video['created'])); ?>" data-video="<?= $video['infoVideo']; ?>" data-size="<?= $video['ekstensi']; ?>">
                                    <span class="my-auto">Info</span>
                                    <i class="icon-info text-info" style="font-size: 18px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="videoAkhir">
                        <video id="my-video" class="video-js" controls controlslist="nodownload" width="280" height="160">
                            <source src="<?= BASEURL; ?>/media/<?= $_SESSION['loginData']['nama']; ?>/<?= $video['namaVideo']; ?>" type="video/mp4" />
                        </video>
                        <div class="card-body" style="background-color: gainsboro; max-width: 280px;">
                            <div class="info d-flex justify-content-between">
                                <p class="text-left" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?= $video['infoVideo']; ?>
                                </p>
                                <button class=" btn btn-sm badge-info"> <?= $video['ekstensi']; ?> </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row gutters">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center primary">
                            <li class="page-item disabled"><a class="page-link" href="#">
                                    <i class="icon-chevron-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="icon-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal modaleditVid animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="">Edit Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= URL; ?>/User/editVideoAkhir" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input class="form-control" id="editIdVid" type="hidden" name="editIdVid" value="">
                            <label for="infoGambar">Edit Nama Video:</label>
                            <input class="form-control" id="infoVideo" type="text" name="editVideo" value="">
                        </div>
                    </div>
                    <div class="modal-footer" style="padding: .5rem;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" name="editBtnVid" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesVidedit animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Video Berhasil Diubah</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modalUnggahVideo animate__animated animate__faster" data-animate-in='animate__fadeInDown' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-unggah modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-info">
                    <h5 class="modal-title my-auto" id="">Unggah File <small><i class="icon-chevron-right"></i></small> <small id="namaFdr" class="mb-1"></small></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form action="<?= URL; ?>/User/rekapupload/" method="POST" enctype="multipart/form-data" class="dropzone gbr" id="videoAkhir">
                    </form>
                </div>
                <div class="modal-footer" style="padding: .5rem;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="batalupload">Batalkan</button>
                    <button type="button" name="tombol" class="btn btn-primary tombol" id="tombolVid">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Delete -->
    <div class="modal modalDeleteVid animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-size">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <form action="<?= URL; ?>/User/hapusVideoAkhir" method="POST">
                    <div class="modal-body text-center">
                        <input id="videoId" type="hidden" name="videoId" value="">
                        <i class="icon-warning text-danger pt-1 mb-4 d-block" style="font-size: 50px;"></i>
                        <h3 class="mb-2"> Anda Yakin Untuk Menghapus Video Ini?</h3>
                        <p class="text-danger">Video yang dihapus tidak dapat dipulihkan!!!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal modalgagalVidedit animate__animated" data-animate-in='animate__bounceIn' data-animate-out="animate__bounceOut" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <?php if (isset($_SESSION['adaVidAkhir']) && isset($_SESSION['vidIdAkhir'])) : ?>
                    <div class="mb-0 text-center">
                        <i class="icon-circle-with-cross text-danger d-block mb-3" style="font-size: 50px;"></i>
                        <h3 class="mb-2">Gagal</h3>
                        <h5 class="text-danger mb-2">Video Gagal Diubah</h5>
                        <p>Video dengan nama <font class="text-danger"><?= $_SESSION['adaVidAkhir']; ?></font> sudah ada</p>
                    </div>
                    <form action="<?= URL; ?>/User/editVideoAkhir" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group mb-0">
                                <input class="form-control" id="editIdVid" type="hidden" name="editIdVid" value="<?= $_SESSION['vidIdAkhir']; ?>">
                                <label for="infoGambar">Edit Nama Video:</label>
                                <input class="form-control" id="infoVideo" type="text" name="editVideo" value="<?= $_SESSION['adaVidAkhir']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer" style="padding: .5rem;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                            <button type="submit" name="editBtnVid" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php unset($_SESSION['adaVidAkhir']); ?>
                    <?php unset($_SESSION['vidIdAkhir']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="modal modalsuksesVidDel animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="mb-0 py-2">
                </div>
                <div class="modal-body text-center">
                    <i class="icon-check_circle text-success d-block mb-3" style="font-size: 50px;"></i>
                    <h3 class="mb-2">Sukses</h3>
                    <h5 class="text-success mb-2">Video Berhasil Dihapus</h5>
                </div>
                <div class="modal-footer justify-content-center" style="padding: .5rem;">
                    <button type="button" class="btn btn-primary px-5" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal info -->
    <div class="modal modalVideo animate__animated" data-animate-in='animate__bounceIn' tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-size modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Info Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="info">
                        <table class="m-0">
                            <tr>
                                <td>Nama Video</td>
                                <td class="px-3">:</td>
                                <td id="Videonama" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Dibuat</td>
                                <td class="px-3">:</td>
                                <td id="tanggal" class="font-weight-bold"></td>
                            </tr>
                            <tr>
                                <td>Ukuran Video</td>
                                <td class="px-3">:</td>
                                <td id="size" class="font-weight-bold"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>