<div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8 position-relative" style="z-index: 10;">
    <div class="documents-container">
        <div class="documents-header">
            <h3 class="d-flex flex-column">
                <?= $data['userid']['info']; ?>
                <small style="color: gray; font-size: 13px;"><?= strtoupper($data['userid']['peran']); ?></small>
            </h3>
        </div>
        <div class="documentsContainerScroll">
            <div class="documents-body" style="padding: .5rem;">
                <!-- Row start -->
                <div class="row no-gutters">
                    <div class="col-xl-12 col-lg-12 col-md-9 col-sm-9 col-8">
                        <div class="tasks-container tsk">
                            <div class="mb-0">
                                <!-- Row start -->
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="table-container border-0">
                                            <div class="table-responsive">
                                                <table id="basicExample" class="table custom-table border-0">
                                                    <thead class="bg-white">
                                                        <tr>
                                                            <th class="text-center">No.</th>
                                                            <th class="text-center">Nama Folder</th>
                                                            <th class="text-center">Ukuran</th>
                                                            <th class="text-center">Tanggal Dibuat</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="border-0">
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($data['folder'] as $folder) : ?>
                                                            <tr>
                                                                <td class="text-center"><?= $i++; ?></td>
                                                                <td>
                                                                    <form action="<?= URL; ?>/Home/user_folderimage/" method="POST">
                                                                        <input type="hidden" name="idFolder" value="<?= $folder['id']; ?>">
                                                                        <input type="hidden" name="idUser" value="<?= $data['userid']['id']; ?>">
                                                                        <button type="submit" class="btn x shadow-none">
                                                                            <i class="icon-folder mr-1 text-warning"></i>
                                                                            <?= $folder['infoFolder']; ?>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                                <td class="text-center"><?= Helper::getFolderSizeById($data['userid']['nama'], $folder['namaFolder']); ?></td>
                                                                <td class="text-center"><?= date('d M Y H:i', strtotime($folder['tanggal'])); ?></td>
                                                                <td class="text-center">
                                                                    <form action="<?= URL; ?>/User/downloadZipById" class="mb-0" method="POST">
                                                                        <input type="hidden" name="zipDownload" value="<?= $folder['namaFolder']; ?>">
                                                                        <input type="hidden" name="idDownload" value="<?= $folder['id']; ?>">
                                                                        <input type="hidden" name="user" value="<?= $data['userid']['id']; ?>">
                                                                        <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                            <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- Row end -->
</div>
</div>
</div>
<!-- Row end -->

</div>