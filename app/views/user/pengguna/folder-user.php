	<div class="main-container">

		<!-- Page header start -->
		<div class="page-header">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><?= $data['Getuser']['info']; ?></li>
				<li class="breadcrumb-item active">Folder</li>
			</ol>

			<ul class="app-actions">
				<li class="d-flex align-items-center">
				</li>
			</ul>
		</div>
		<!-- Page header end -->



		<!-- Content wrapper start -->
		<div class="content-wrapper">

			<!-- Row start -->
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="task-section">
						<!-- Row start -->
						<div class="row no-gutters">
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
								<div class="labels-container lbl py-0">

									<div class="filters-block">
										<div class="filters">
											<?php if ($data['Getuser']['peran'] == 'footager') : ?>
												<form action="<?= URL; ?>/User/userfolder/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-folder" style="color:#e0a318"></i> Folder
													</button>
												</form>
												<!-- <a href="<?= URL; ?>/User/userimage/<?= $data['Getuser']['id']; ?>">
													<i class="icon-image" style="color:#366699"></i> Image
												</a> -->
												<form action="<?= URL; ?>/User/userimage/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-image" style="color:#366699"></i> Image
													</button>
												</form>
												<!-- <a href="<?= URL; ?>/User/uservideo/<?= $data['Getuser']['id']; ?>">
													<i class="icon-video" style="color:#338f50"></i> Video
												</a> -->
												<form action="<?= URL; ?>/User/uservideo/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-video" style="color:#338f50"></i> Video
													</button>
												</form>
												<!-- <a href="<?= URL; ?>/User/useraudio/<?= $data['Getuser']['id']; ?>">
													<i class="icon-music" style="color:#ba1d1d"></i> Audio
												</a> -->
												<form action="<?= URL; ?>/User/useraudio/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-music" style="color:#ba1d1d"></i> Audio
													</button>
												</form>
											<?php else : ?>
												<!-- <a href="<?= URL; ?>/User/userimage/<?= $data['Getuser']['id']; ?>">
													<i class="icon-image" style="color:#366699"></i> Image
												</a> -->
												<form action="<?= URL; ?>/User/userimage/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-image" style="color:#366699"></i> Image
													</button>
												</form>
												<!-- <a href="<?= URL; ?>/User/uservideo/<?= $data['Getuser']['id']; ?>">
													<i class="icon-video" style="color:#338f50"></i> Video
												</a> -->
												<form action="<?= URL; ?>/User/uservideo/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-video" style="color:#338f50"></i> Video
													</button>
												</form>
												<!-- <a href="<?= URL; ?>/User/useraudio/<?= $data['Getuser']['id']; ?>">
													<i class="icon-music" style="color:#ba1d1d"></i> Audio
												</a> -->
												<form action="<?= URL; ?>/User/useraudio/" class="active p-0" method="POST">
													<input type="hidden" name="idFolder" value="<?= $data['Getuser']['id']; ?>">
													<button type="submit" class="btn col-xl-12 text-lg-left">
														<i class="icon-music" style="color:#ba1d1d"></i> Audio
													</button>
												</form>
											<?php endif; ?>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
								<div class="tasks-container tsk">
									<div class="tasks-header">
										<h3>Today <span class="date" id="todays-date"></span></h3>
									</div>
									<div class="tasksContainerScroll">
										<!-- Row start -->
										<div class="row no-gutters justify-content-center">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="table-container border-0">
													<div class="table-responsive">
														<table id="basicExample" class="table custom-table">
															<thead>
																<tr>
																	<th class="text-center">No.</th>
																	<th class="text-center">Nama Folder</th>
																	<th class="text-center">Ukuran</th>
																	<th class="text-center">Tanggal Dibuat</th>
																	<th class="text-center">Aksi</th>
																</tr>
															</thead>
															<tbody>
																<?php $i = 1; ?>
																<?php foreach ($data['folderuser'] as $folder) : ?>
																	<tr>
																		<td class="text-center"><?= $i++; ?></td>
																		<td>
																			<form action="<?= URL; ?>/User/userfolder_image/" method="POST">
																				<input type="hidden" name="idFolder" id="" value="<?= $folder['id']; ?>">
																				<input type="hidden" name="idUser" value="<?= $data['Getuser']['id']; ?>">
																				<button type="submit" class="btn">
																					<i class="icon-folder mr-1 text-warning"></i>
																					<?= $folder['infoFolder']; ?>
																				</button>
																			</form>
																		</td>
																		<td class="text-center"><?= Helper::getFolderSizeById($data['Getuser']['nama'], $folder['namaFolder']); ?></td>
																		<td class="text-center"><?= date('d M Y H:i', strtotime($folder['tanggal'])); ?></td>
																		<td class="text-center">
																			<form action="<?= URL; ?>/User/downloadZipById" class="mb-0" method="POST">
																				<input type="hidden" name="zipDownload" value="<?= $folder['namaFolder']; ?>">
																				<input type="hidden" name="idDownload" value="<?= $folder['id']; ?>">
																				<input type="hidden" name="user" value="<?= $data['Getuser']['id']; ?>">
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
			<!-- Row end -->

		</div>
		<!-- Content wrapper end -->