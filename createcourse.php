   <!------------ top html ---------------->

   <?php include_once 'includes/top.php' ?>

   <!-------- top html end ---------------->


   <!-------- fixed-top nav ---------------->

   <?php include_once 'includes/topnav.php' ?>

   <!-------- fixed-top end ---------------->


   <!-------- fixed-side nav ---------------->

   <?php include_once 'includes/sidenav.php' ?>


   <!-------- Content ---------------->

   <div class="app-content content">
       <div class="content-wrapper">
           <div class="content-header row">
               <div class="content-header-left col-md-6 col-12 mb-2">
                   <div class="row breadcrumbs-top">
                       <div class="breadcrumb-wrapper col-12">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html">Home</a>
                               </li>
                               <li class="breadcrumb-item"><a href="index.html">Courses</a>
                               </li>

                               <li class="breadcrumb-item active">Create Courses
                               </li>
                           </ol>
                       </div>
                   </div>
                   </<br>
                   </<br>
                   <h3 class="content-header-title mb-0"></h3>
               </div>
           </div>
           <div class="container">
               <div class="content-body">
                   <!-- Basic Elements start -->
                   <section class="basic-elements">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="card">
                                   <div class="card-header">
                                       <h4 class="card-title">Create Courses</h4>
                                   </div>
                                   <div class="card-content">
                                       <form class="validate-form" method="POST" action="example.php" enctype="multipart/form-data">
                                           <div class="card-body">
                                               <div class="row">
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Course Title<span class="text-danger">*</span></label>
                                                           <input name="course_title" type="text" class="form-control" id="basicInput" require>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Course Name<span class="text-danger">*</span></label>
                                                           <input name="course_name" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Course Category<span class="text-danger">*</span></label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Open this for Categories</option>
                                                               <option value="1">One</option>
                                                               <option value="2">Two</option>
                                                               <option value="3">Three</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Short Name<span class="text-danger">*</span></label>
                                                           <input name="short_name" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>

                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Video URL<span class="text-danger">*</span></label>
                                                           <input name="video_url" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Course Logo<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="course_logo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Year of Expirenced Trainers<span class="text-danger">*</span></label>
                                                           <input name="year_of_exp" type="text" class="form-control" id="basicInput" require>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Professional Enrolled<span class="text-danger">*</span></label>
                                                           <input name="pro_enroll" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Ratings<span class="text-danger">*</span></label>
                                                           <input name="rating" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label>Short Description<span class="text-danger">*</span></label>
                                                           <div class="form-group">
                                                               <textarea class='summernote' id='summernote' rows='5' cols="100"></textarea>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Delivered By<span class="text-danger">*</span></label>
                                                           <input name="delivered_by" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Delivered By Text<span class="text-danger">*</span></label>
                                                           <input name="delivered_by_text" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Intro Logo 1<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="intro_logo_1" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Intro Logo 2<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="intro_logo_2" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Summary Title<span class="text-danger">*</span></label>
                                                           <input name="summary_title" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <label class="control-label" for="intro_text">Review Schema Description<span class="text-danger">*</span></label>
                                                           <textarea class="form-control no-resize " rows="5" name="short_description" id="summernote" required></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                       <div class="form-group">
                                                           <label class="control-label" for="intro_text">Summarry Text<span class="text-danger">*</span></label>
                                                           <textarea class="form-control no-resize " rows="5" name="short_description" id="summernote" required></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Course <span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="course_broucher" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Course Content<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="course_content" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                               </div>
                                           </div>
                   </section>
                   <!-- Basic Inputs end -->
                   <!-- Basic Elements start -->
                   <section class="basic-elements">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="card">
                                   <div class="card-header">
                                       <h4 class="card-title">SEO</h4>
                                   </div>
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="row">
                                               <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                   <fieldset class="form-group">
                                                       <label for="basicInput">Meta Title<span class="text-danger">*</span></label>
                                                       <input name="meta_title" type="text" class="form-control" id="basicInput" require>
                                                   </fieldset>
                                               </div>
                                               <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                   <fieldset class="form-group">
                                                       <label for="basicInput">Meta Description<span class="text-danger">*</span></label>
                                                       <input name="meta_description" type="text" class="form-control" id="basicInput">
                                                   </fieldset>
                                               </div>
                                               <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                   <fieldset class="form-group">
                                                       <label for="basicInput">Meta Keywords <span class="text-danger">*</span></label>
                                                       <input name="meta_keywords" type="text" class="form-control" id="basicInput">
                                                   </fieldset>
                                               </div>
                                           </div>
                                           
                               <button type="submit" class="btn btn-primary">Submit</button>         </div>
                                       </div>
                                   </div>
                               </div>
                       
                           </div>
                          
                           
                          

                          </form>

                       </div>
                     
                   </section>
               </div>
            
           </div>
       </div>
  
       </section>
       <!-- Basic Inputs end -->
   </div>
   </div>
   </div>

   <!------------ bottom html ---------------->

   <?php include_once 'includes/bottom.php' ?>

   <!------------ bottom html---------------->