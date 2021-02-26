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
                               <li class="breadcrumb-item"><a href="index.html">Trainers</a>
                               </li>

                               <li class="breadcrumb-item active">Add Trainers </li>
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
                                       <h4 class="card-title">Add Trainers</h4>
                                   </div>

                                   <div class="card-content">
                                       <form class="validate-form" method="POST" action="example.php" enctype="multipart/form-data">

                                           <div class="card-body">

                                               <div class="row">
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Name<span class="text-danger">*</span></label>
                                                           <input name="course_title" type="text" class="form-control" id="basicInput" require>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Qualification<span class="text-danger">*</span></label>
                                                           <input name="course_name" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Linkedin</label>
                                                           <input name="course_category" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>



                                                   <div class="col-lg-6 col-md-12">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Image<span class="text-danger">*</span></label>
                                                           <div class="custom-file">
                                                               <input name="intro_logo_2" type="file" class="custom-file-input" id="inputGroupFile01">
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                           </div>
                                                       </fieldset>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <label class="control-label" for="intro_text">Summary<span class="text-danger">*</span></label>
                                                           <textarea class="form-control no-resize" rows="5" name="short_description" id="short_description" required></textarea>
                                                       </div>
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
                                                       <label for="basicInput">Meta Keywords<span class="text-danger">*</span> </label>
                                                       <input name="meta_keywords" type="text" class="form-control" id="basicInput">
                                                   </fieldset>
                                               </div>


                                               <div class="col-12">
                                                   <button type="submit" class="btn btn-primary">Submit</button>
                                               </div>

                                           </div>

                                       </div>

                                   </div>

                               </div>
                           </div>


                           </form>


                       </div>

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