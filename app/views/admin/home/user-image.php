               <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                   <div class="documents-container">

                       <!-- Row start -->
                       <div class="row gutters">
                           <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 col-8">
                               <div class="nav-tabs-container position-relative">
                                   <div class="document-header">
                                       <ul class="nav nav-tabs tasks-header" id="myTab3" role="tablist">
                                           <li class="nav-item">
                                               <a class="nav-link tab-link active" id="jpg-tab3" data-toggle="tab" href="#jpg" role="tab" aria-controls="jpg" aria-selected="true"><i class="icon-image"></i>jpg</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link tab-link" id="png-tab3" data-toggle="tab" href="#png" role="tab" aria-controls="png" aria-selected="false"><i class="icon-image"></i>png</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link tab-link" id="jpeg-tab3" data-toggle="tab" href="#jpeg" role="tab" aria-controls="jpeg" aria-selected="false"><i class="icon-image"></i>jpeg</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link tab-link" id="gif-tab3" data-toggle="tab" href="#gif" role="tab" aria-controls="gif" aria-selected="false"><i class="icon-image"></i>gif</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link tab-link" id="tiff-tab3" data-toggle="tab" href="#tiff" role="tab" aria-controls="tiff" aria-selected="false"><i class="icon-image"></i>tiff</a>
                                           </li>
                                       </ul>
                                   </div>

                                   <div class="tasks-container tsk">
                                       <div class="documentsContainerScroll">
                                           <!-- Row start -->
                                           <div class="documents-body" style="padding: 0.1rem;">
                                               <div class="tab-content" id="myTabContent3" style="padding: .1rem;">
                                                   <div class="tab-pane fade show active" id="jpg" role="tabpanel" aria-labelledby="jpg-tab3">
                                                       <div class="baguetteBoxOne gallery">
                                                           <div class="row no-gutters justify-content-center">
                                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                   <div class="table-container border-0">
                                                                       <div class="table-responsive">
                                                                           <table id="jpgTable" class="table custom-table border-0">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th class="text-center">No.</th>
                                                                                       <th class="text-center">Nama Gambar</th>
                                                                                       <th class="text-center">Ekstensi</th>
                                                                                       <th class="text-center">Ukuran</th>
                                                                                       <th class="text-center">Tanggal Upload</th>
                                                                                       <th class="text-center">Aksi</th>
                                                                                   </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                                   <?php $i = 1; ?>
                                                                                   <?php foreach ($data['gambarUser'] as $image) : ?>
                                                                                       <?php if ($image['ekstensi'] == 'jpg') : ?>
                                                                                           <tr>
                                                                                               <td class="text-center"><?= $i++; ?></td>
                                                                                               <td>
                                                                                                   <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><i class="icon-image text-primary mr-1"></i><?= $image['info']; ?>
                                                                                                   </a>
                                                                                               </td>
                                                                                               <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                               <td class="text-center"><?= $image['size']; ?></td>
                                                                                               <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                               <td class="text-center">
                                                                                                   <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                       <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                       <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                       <input type="hidden" name="user" value="<?= $data['userid']['nama']; ?>">
                                                                                                       <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                                           <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                                       </button>
                                                                                                   </form>
                                                                                               </td>
                                                                                           </tr>
                                                                                       <?php endif; ?>
                                                                                   <?php endforeach; ?>
                                                                               </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="tab-pane fade" id="png" role="tabpanel" aria-labelledby="png-tab3">
                                                       <div class="baguetteBoxOne gallery">
                                                           <div class="row no-gutters justify-content-center">
                                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                   <div class="table-container border-0">
                                                                       <div class="table-responsive">
                                                                           <table id="pngTable" class="table custom-table border-0">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th class="text-center">No.</th>
                                                                                       <th class="text-center">Nama Gambar</th>
                                                                                       <th class="text-center">Ekstensi</th>
                                                                                       <th class="text-center">Ukuran</th>
                                                                                       <th class="text-center">Tanggal Upload</th>
                                                                                       <th class="text-center">Aksi</th>
                                                                                   </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                                   <?php $i = 1; ?>
                                                                                   <?php foreach ($data['gambarUser'] as $image) : ?>
                                                                                       <?php if ($image['ekstensi'] == 'png') : ?>
                                                                                           <tr>
                                                                                               <td class="text-center"><?= $i++; ?></td>
                                                                                               <td>
                                                                                                   <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><i class="icon-image text-primary mr-1"></i><?= $image['info']; ?>
                                                                                                   </a>
                                                                                               </td>
                                                                                               <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                               <td class="text-center"><?= $image['size']; ?></td>
                                                                                               <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                               <td class="text-center">
                                                                                                   <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                       <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                       <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                       <input type="hidden" name="user" value="<?= $data['userid']['nama']; ?>">
                                                                                                       <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                                           <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                                       </button>
                                                                                                   </form>
                                                                                               </td>
                                                                                           </tr>
                                                                                       <?php endif; ?>
                                                                                   <?php endforeach; ?>
                                                                               </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="tab-pane fade" id="jpeg" role="tabpanel" aria-labelledby="jpeg-tab3">
                                                       <div class="baguetteBoxOne gallery">
                                                           <div class="row no-gutters justify-content-center">
                                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                   <div class="table-container border-0">
                                                                       <div class="table-responsive">
                                                                           <table id="jpegTable" class="table custom-table border-0">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th class="text-center">No.</th>
                                                                                       <th class="text-center">Nama Gambar</th>
                                                                                       <th class="text-center">Ekstensi</th>
                                                                                       <th class="text-center">Ukuran</th>
                                                                                       <th class="text-center">Tanggal Upload</th>
                                                                                       <th class="text-center">Aksi</th>
                                                                                   </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                                   <?php $i = 1; ?>
                                                                                   <?php foreach ($data['gambarUser'] as $image) : ?>
                                                                                       <?php if ($image['ekstensi'] == 'jpeg') : ?>
                                                                                           <tr>
                                                                                               <td class="text-center"><?= $i++; ?></td>
                                                                                               <td>
                                                                                                   <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><i class="icon-image text-primary mr-1"></i><?= $image['info']; ?>
                                                                                                   </a>
                                                                                               </td>
                                                                                               <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                               <td class="text-center"><?= $image['size']; ?></td>
                                                                                               <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                               <td class="text-center">
                                                                                                   <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                       <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                       <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                       <input type="hidden" name="user" value="<?= $data['userid']['nama']; ?>">
                                                                                                       <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                                           <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                                       </button>
                                                                                                   </form>
                                                                                               </td>
                                                                                           </tr>
                                                                                       <?php endif; ?>
                                                                                   <?php endforeach; ?>
                                                                               </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="tab-pane fade" id="gif" role="tabpanel" aria-labelledby="gif-tab3">
                                                       <div class="baguetteBoxOne gallery">
                                                           <div class="row no-gutters justify-content-center">
                                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                   <div class="table-container border-0">
                                                                       <div class="table-responsive">
                                                                           <table id="gifTable" class="table custom-table border-0">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th class="text-center">No.</th>
                                                                                       <th class="text-center">Nama Gambar</th>
                                                                                       <th class="text-center">Ekstensi</th>
                                                                                       <th class="text-center">Ukuran</th>
                                                                                       <th class="text-center">Tanggal Upload</th>
                                                                                       <th class="text-center">Aksi</th>
                                                                                   </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                                   <?php $i = 1; ?>
                                                                                   <?php foreach ($data['gambarUser'] as $image) : ?>
                                                                                       <?php if ($image['ekstensi'] == 'gif') : ?>
                                                                                           <tr>
                                                                                               <td class="text-center"><?= $i++; ?></td>
                                                                                               <td>
                                                                                                   <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><i class="icon-image text-primary mr-1"></i><?= $image['info']; ?>
                                                                                                   </a>
                                                                                               </td>
                                                                                               <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                               <td class="text-center"><?= $image['size']; ?></td><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                               <td class="text-center">
                                                                                                   <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                       <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                       <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                       <input type="hidden" name="user" value="<?= $data['userid']['nama']; ?>">
                                                                                                       <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                                           <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                                       </button>
                                                                                                   </form>
                                                                                               </td>
                                                                                           </tr>
                                                                                       <?php endif; ?>
                                                                                   <?php endforeach; ?>
                                                                               </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="tab-pane fade" id="tiff" role="tabpanel" aria-labelledby="tiff-tab3">
                                                       <div class="baguetteBoxOne gallery">
                                                           <div class="row no-gutters justify-content-center">
                                                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                   <div class="table-container border-0">
                                                                       <div class="table-responsive">
                                                                           <table id="tiffTable" class="table custom-table border-0">
                                                                               <thead>
                                                                                   <tr>
                                                                                       <th class="text-center">No.</th>
                                                                                       <th class="text-center">Nama Gambar</th>
                                                                                       <th class="text-center">Ekstensi</th>
                                                                                       <th class="text-center">Ukuran</th>
                                                                                       <th class="text-center">Tanggal Upload</th>
                                                                                       <th class="text-center">Aksi</th>
                                                                                   </tr>
                                                                               </thead>
                                                                               <tbody>
                                                                                   <?php $i = 1; ?>
                                                                                   <?php foreach ($data['gambarUser'] as $image) : ?>
                                                                                       <?php if ($image['ekstensi'] == 'tiff') : ?>
                                                                                           <tr>
                                                                                               <td class="text-center"><?= $i++; ?></td>
                                                                                               <td>
                                                                                                   <a class="border-0 mb-0" href="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $image['nama'] ?>" data-caption="<?= $image['info']; ?>"><i class="icon-image text-primary mr-1"></i><?= $image['info']; ?>
                                                                                               </td>
                                                                                               <td class="text-center"><?= $image['ekstensi']; ?></td>
                                                                                               <td class="text-center"><?= $image['size']; ?></td>
                                                                                               <td class="text-center"><?= date('d M Y H:i', strtotime($image['created_at'])); ?></td>
                                                                                               <td class="text-center">
                                                                                                   <form action="<?= URL; ?>/User/downloadImageById" class="mb-0" method="POST">
                                                                                                       <input type="hidden" name="namaImg" value="<?= $image['nama']; ?>">
                                                                                                       <input type="hidden" name="idDownload" value="<?= $image['id']; ?>">
                                                                                                       <input type="hidden" name="user" value="<?= $data['userid']['nama']; ?>">
                                                                                                       <button class="dropdown-item border-0 m-0 d-flex justify-content-center">
                                                                                                           <i class="icon-download" style="font-size: 18px; color: #02a7ef;"></i>
                                                                                                       </button>
                                                                                                   </form>
                                                                                               </td>
                                                                                           </tr>
                                                                                       <?php endif; ?>
                                                                                   <?php endforeach; ?>
                                                                               </tbody>
                                                                           </table>
                                                                       </div>
                                                                   </div>
                                                               </div>
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
                       </div>
                       <!-- Row end -->


                   </div>
               </div>
               </div>
               <!-- Row end -->
               </div>
               </div>
               </div>
               <!-- Row end -->

               </div>

               <!-- modal info -->
               <div class="modal modalInfo" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" id="vCenterModal">
                   <div class="modal-dialog modal-dialog-centered">
                       <div class="modal-content">
                           <div class="modal-header" style="background: #017190;">
                               <h5 class="modal-title" id="">Info Gambar</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <div class="info">
                                   <table class="m-0">
                                       <tr>
                                           <td>Nama Gambar</td>
                                           <td class="px-3">:</td>
                                           <td id="gambarNama" class="font-weight-bold"></td>
                                       </tr>
                                       <tr>
                                           <td>Diupload</td>
                                           <td class="px-3">:</td>
                                           <td id="tanggal" class="font-weight-bold"></td>
                                       </tr>
                                       <tr>
                                           <td>Ukuran</td>
                                           <td class="px-3">:</td>
                                           <td id="size" class="font-weight-bold"></td>
                                       </tr>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>