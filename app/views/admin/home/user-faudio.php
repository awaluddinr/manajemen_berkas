 <!-- Page header start -->
 <div class="page-header">
     <ol class="breadcrumb">
         <li class="breadcrumb-item my-auto">
             <a class="text-white my-auto d-block" style="padding: 10px 20px; border-radius: 70px; font-size: 13px; background: #ff0000 ;" href="<?= URL; ?>/Home/user_folder/<?= base64_encode($data['userid']['id']); ?>">
                 <i class="icon-arrow-left-circle"></i> Kembali
             </a>
         </li>
         <li class="breadcrumb-item active"><?= $data['folderinfo']['infoFolder']; ?></li>
     </ol>
 </div>
 <!-- Page header end -->

 <!-- Content wrapper start -->
 <div class="main-container">

     <!-- Row start -->
     <div class="row gutters">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="documents-section">
                 <!-- Row start -->
                 <div class="row no-gutters">
                     <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4 position-relative" style="z-index: 1;">
                         <div class="docs-type-container p-0">
                             <div class="docTypeContainerScroll">
                                 <div class="docs-block">
                                     <div class="doc-labels">
                                         <form action="<?= URL; ?>/Home/user_folderimage/" method="POST">
                                             <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>">
                                             <input type="hidden" name="idUser" value="<?= $data['userid']['id']; ?>">
                                             <button type="submit" class="dropdown-item">
                                                 <i class="icon-image"></i> image
                                             </button>
                                         </form>
                                         <form action="<?= URL; ?>/Home/user_foldervideo/" method="POST">
                                             <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>">
                                             <input type="hidden" name="idUser" value="<?= $data['userid']['id']; ?>">
                                             <button type="submit" class="dropdown-item ">
                                                 <i class="icon-video"></i> video
                                             </button>
                                         </form>
                                         <form action="<?= URL; ?>/Home/user_folderaudio/" method="POST">
                                             <input type="hidden" name="idFolder" value="<?= $data['folderinfo']['id']; ?>">
                                             <input type="hidden" name="idUser" value="<?= $data['userid']['id']; ?>">
                                             <button type="submit" class="dropdown-item ">
                                                 <i class="icon-music"></i> audio
                                             </button>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                         <div class="documents-container">

                             <!-- Row start -->
                             <div class="row gutters">
                                 <div class="col-xl-12 col-lg-12 col-md-10 col-sm-10 col-8">
                                     <div class="nav-tabs-container position-relative">
                                         <div class="document-header">
                                             <ul class="nav nav-tabs x" id="myTab3" role="tablist">
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link active" id="mp3-tab3" data-toggle="tab" href="#mp3" role="tab" aria-controls="mp3" aria-selected="true"><i class="icon-queue_music"></i>mp3</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="wav-tab3" data-toggle="tab" href="#wav" role="tab" aria-controls="wav" aria-selected="false"><i class="icon-queue_music"></i>wav</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="aac-tab3" data-toggle="tab" href="#aac" role="tab" aria-controls="aac" aria-selected="false"><i class="icon-queue_music"></i>aac</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="wma-tab3" data-toggle="tab" href="#wma" role="tab" aria-controls="wma" aria-selected="false"><i class="icon-queue_music"></i>wma</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="pcm-tab3" data-toggle="tab" href="#pcm" role="tab" aria-controls="pcm" aria-selected="false"><i class="icon-queue_music"></i>pcm</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="flac-tab3" data-toggle="tab" href="#flac" role="tab" aria-controls="flac" aria-selected="false"><i class="icon-queue_music"></i>flac</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="aiff-tab3" data-toggle="tab" href="#aiff" role="tab" aria-controls="aiff" aria-selected="false"><i class="icon-queue_music"></i>aiff</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a class="nav-link tab-link" id="ogg-tab3" data-toggle="tab" href="#ogg" role="tab" aria-controls="ogg" aria-selected="false"><i class="icon-queue_music"></i>ogg</a>
                                                 </li>
                                             </ul>
                                         </div>

                                         <div class="tasks-container tsk">
                                             <div class="documentsContainerScroll">
                                                 <!-- Row start -->
                                                 <div class="documents-body" style="padding: 0.1rem;">
                                                     <div class="tab-content" id="myTabContent3" style="padding: .1rem;">
                                                         <div class="tab-pane fade show active" id="mp3" role="tabpanel" aria-labelledby="mp3-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="jpgTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'mp3') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                                         <div class="tab-pane fade" id="wav" role="tabpanel" aria-labelledby="wav-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="pngTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'wav') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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

                                                         <div class="tab-pane fade" id="aac" role="tabpanel" aria-labelledby="aac-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="jpegTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'aac') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
                                                         <div class="tab-pane fade" id="wma" role="tabpanel" aria-labelledby="wma-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="tiffTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'wma') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
                                                         <div class="tab-pane fade" id="pcm" role="tabpanel" aria-labelledby="pcm-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="pcmTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'pcm') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
                                                         <div class="tab-pane fade" id="flac" role="tabpanel" aria-labelledby="flac-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="flacTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'flac') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
                                                         <div class="tab-pane fade" id="aiff" role="tabpanel" aria-labelledby="aiff-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="aiffTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'aiff') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
                                                         <div class="tab-pane fade" id="ogg" role="tabpanel" aria-labelledby="ogg-tab3">
                                                             <div class="row no-gutters justify-content-center">
                                                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                     <div class="table-container border-0">
                                                                         <div class="table-responsive">
                                                                             <table id="oggTable" class="table custom-table border-0">
                                                                                 <thead>
                                                                                     <tr>
                                                                                         <th class="text-center">No.</th>
                                                                                         <th class="text-center">Nama Audio</th>
                                                                                         <th class="text-center">Ekstensi</th>
                                                                                         <th class="text-center">Ukuran</th>
                                                                                         <th class="text-center">Tanggal Upload</th>
                                                                                         <th class="text-center">Aksi</th>
                                                                                     </tr>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                     <?php $i = 1; ?>
                                                                                     <?php foreach ($data['getAudio'] as $audio) : ?>
                                                                                         <?php if ($audio['ekstensi'] == 'ogg') : ?>
                                                                                             <tr>
                                                                                                 <td class="text-center"><?= $i++; ?></td>
                                                                                                 <td>
                                                                                                     <a class="border-0 playAud d-block" href="" data-toggle="modal" style="width: 85px;" data-target=".modalplayAud" data-caption="<?= $audio['info']; ?>" data-audio="<?= BASEURL; ?>/media/<?= $data['userid']['nama']; ?>/<?= $data['folderinfo']['namaFolder']; ?>/<?= $audio['nama'] ?>">
                                                                                                         <i class="icon-music text-danger mr-1"></i>
                                                                                                         <p class="text-center font-weight-bold py-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><?= $audio['info']; ?></p>
                                                                                                     </a>
                                                                                                 </td>
                                                                                                 <td class="text-center"><?= $audio['ekstensi']; ?></td>
                                                                                                 <td class="text-center"><?= $audio['size']; ?></td>
                                                                                                 <td class="text-center"><?= date('d M Y H:i', strtotime($audio['created_at'])); ?></td>
                                                                                                 <td class="text-center">
                                                                                                     <form action="<?= URL; ?>/User/downloadfolderAudio" class="mb-0" method="POST">
                                                                                                         <input type="hidden" name="namaAud" value="<?= $audio['nama']; ?>">
                                                                                                         <input type="hidden" name="idDownload" value="<?= $audio['id']; ?>">
                                                                                                         <input type="hidden" name="namaFolder" value="<?= $data['folderinfo']['namaFolder']; ?>">
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
     <div class="modal modalplayAud x fade p-0" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
         <div class="modal-dialog modal-size modal-dialog-centered x">
             <div class="modal-content position-relative x border-0">
                 <div class="modal-header px-5 position-absolute x" style="right: 29%; top: -10%; z-index: 99;">
                     <h5 class="modal-title" id=""></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="play d-flex justify-content-center">
                         <div class="audio text-center">
                             <div class="gif text-center mb-2">
                                 <img src="<?= BASEURL; ?>/media/img/awal.gif" alt="" width="250" height="50" id="img">
                             </div>
                             <audio src="" height="450" width="850" id="player" class="playerAud" controls controlslist="nodownload" autoplay></audio>
                             <div class="aud text-center mt-2">
                                 <marquee class="title py-1 text-white x captionAud" id="caption" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" width="50%" behavior="scroll" direction="" scrolldelay="500">
                                 </marquee>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>