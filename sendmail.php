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
                               <li class="breadcrumb-item"><a href="#">Training Slot</a>
                               </li>
                               <li class="breadcrumb-item"><a href="#">Training Slot</a>
                               </li>
                               <li class="breadcrumb-item active">Send Mail
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
                                       <h4 class="card-title">Send Mail</h4>
                                   </div>
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-md-3">
                                               <p>Batch ID: CSM-300321</p>
                                           </div>
                                           <div class="col-md-3">
                                               <p>Course Name: Certified Scrum Master® Certification Course
                                               </p>
                                           </div>

                                       </div>
                                   </div>

                                   <div class="card-content">
                                       <form class="validate-form" method="POST" action="example.php" enctype="multipart/form-data">
                                           <div class="card-body">
                                               <div class="row">
                                                   <fieldset class="form-group">
                                                       <label for="customSelect">User<span class="text-danger">*</span></label>
                                                       <select class="custom-select block" id="customSelect">
                                                           <option selected>Open this for Select User</option>
                                                           <option value="1">user 1</option>
                                                           <option value="2">user 2</option>
                                                           <option value="3">user 3</option>
                                                       </select>
                                                   </fieldset>
                                               </div>
                                               <div class="row">
                                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Subject<span class="text-danger">*</span></label>
                                                           <input name="course_title" type="text" class="form-control" id="basicInput" require>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label>Message<span class="text-danger">*</span></label>
                                                           <div class="form-group">
                                                               <textarea class='summernote' id='summernote' rows='5' cols="100"></textarea>
                                                           </div>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Choose File<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="intro_logo_1" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>

                                               </div>
                                               <button type="submit" class="btn btn-primary">Sent</button>

                                           </div>
                                       </form>
                   </section>





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