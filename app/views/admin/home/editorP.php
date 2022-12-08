   <!-- Page header start -->
   <div class="page-header">
       <ol class="breadcrumb">
           <li class="breadcrumb-item">Home</li>
           <li class="breadcrumb-item">Apps</li>
           <li class="breadcrumb-item active">Documents</li>
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
                       <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                           <div class="docs-type-container">
                               <div class="docTypeContainerScroll">
                                   <div class="docs-block">
                                       <div class="doc-labels">
                                           <a href="#" class="active">
                                               <i class="icon-image"></i> Foto
                                           </a>
                                           <a href="#">
                                               <i class="icon-video"></i> Video
                                           </a>
                                           <a href="#">
                                               <i class="icon-music"></i> Audio
                                           </a>
                                           <a href="#">
                                               <i class="icon-trash"></i> File Sampah
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                           <div class="documents-container">
                               <div class="modal fade" id="addNewDocument" tabindex="-1" role="dialog" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="addNewDocumentLabel"><?= $data['ID']['nama']; ?></h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                               <form class="row gutters">
                                                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                       <div class="form-group">
                                                           <label for="docTitle">Document Title</label>
                                                           <input type="text" class="form-control" id="docTitle" placeholder="Task Title">
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                       <div class="form-group">
                                                           <label for="dovType">Document Type</label>
                                                           <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                       <div class="form-group">
                                                           <label for="addedDate">Created On</label>
                                                           <div class="custom-date-input">
                                                               <input type="text" name="" class="form-control datepicker" id="addedDate" placeholder="10/10/2019">
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                       <div class="form-group mb-0">
                                                           <label for="docDetails">Document Details</label>
                                                           <textarea class="form-control" id="docDetails"></textarea>
                                                       </div>
                                                   </div>
                                               </form>
                                           </div>
                                           <div class="modal-footer custom">
                                               <div class="left-side">
                                                   <button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">Cancel</button>
                                               </div>
                                               <div class="divider"></div>
                                               <div class="right-side">
                                                   <button type="button" class="btn btn-link success btn-block">Add</button>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="documents-header">
                                   <h3>Today <span class="date" id="todays-date"></span></h3>
                                   <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewDocument">Add Document</button>
                               </div>
                               <div class="documentsContainerScroll">
                                   <div class="documents-body">
                                       <!-- Row start -->
                                       <div class="row gutters">
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/zip.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">App Workflow</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/pdf.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Design Document</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/doc.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Monthly Income</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/xls.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Project Budget</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/ppt.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Presentation</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/zip.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Application</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/pdf.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Wireframes</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/doc.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Policies</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
                                               </div>
                                           </div>
                                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                               <div class="doc-block">
                                                   <div class="doc-icon">
                                                       <img src="img/docs/xls.svg" alt="Doc Icon" />
                                                   </div>
                                                   <div class="doc-title">Payments</div>
                                                   <button class="btn btn-primary btn-lg">Download</button>
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