   <!------------ top html ---------------->

   <?php include_once 'includes/top.php' ?>

   <!-------- top html end ---------------->


   <!-------- fixed-top nav ---------------->

   <?php include_once 'includes/topnav.php' ?>

   <!-------- fixed-top end ---------------->


   <!-------- fixed-side nav ---------------->

   <?php include_once 'includes/sidenav.php' ?>

   <!-------- fixed-side end ---------------->
   <div class="app-content content">
       <div class="content-wrapper">
           <div class="content-header row">
               <div class="content-header-left col-md-6 col-12 mb-2">
                   <div class="row breadcrumbs-top">
                       <div class="breadcrumb-wrapper col-12">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html">Home</a>
                               </li>
                               <li class="breadcrumb-item"><a href="index.html">Management</a>
                               </li>
                               <li class="breadcrumb-item active">Page
                               </li>

                           </ol>
                       </div>
                   </div>
                   <br />
                   <br>

                   <h3 class="content-header-title mb-0">Page</h3>
               </div>

           </div>
           <div class="content-body">
               <!-- Zero configuration table -->
               <section id="configuration">
                   <div class="row">
                       <div class="col-12">
                           <div class="card">

                               <div class="card-content collapse show">
                                   <div class="card-body card-dashboard">

                                       <table class="table table-striped table-bordered zero-configuration">
                                           <thead>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Page Name</th>

                                                   <th class="justify-content-center">Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>1</td>
                                                   <td>About</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <button class="btn btn-float btn-square  btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="far fa-edit"></i></a></button>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>2</td>
                                                   <td>Blog
                                                   </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>3</td>
                                                   <td>Contact</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>4</td>
                                                   <td>Corporate Training
                                                   </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>5</td>
                                                   <td>Courses</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>6</td>
                                                   <td>FAQ</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>7</td>
                                                   <td>Home</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>8</td>
                                                   <td>Privacy Policy
                                                   </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>9</td>
                                                   <td>Resource</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>10</td>
                                                   <td>Terms And Condition
                                                   </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->
                                                           <a href="editpost.php" class="btn btn-float btn-square  btn-warning btn-sm"><i class="far fa-edit"></i></a>

                                                       </div>
                                               </tr>


                                           </tbody>
                                           <tfoot>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Page Name</th>

                                                   <th>Action</th>
                                               </tr>
                                           </tfoot>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
               <!--/ Zero configuration table -->

           </div>
       </div>
   </div>

   <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel2"><i class="fas fa-hashtag"></i>
                       Page</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Page Name<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" id="basicInput">
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Page Title<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" id="basicInput">
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Meta Description<font class="text-danger">*</font></label>
                              <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Meta Keywords<font class="text-danger">*</font></label>
                              <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                           </fieldset>
                       </div>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-outline-primary">Save changes</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </div>
   <!-- ////////////////////////////////////////////////////////////////////////////-->


               <!------------ bottom html ---------------->

               <?php include_once 'includes/bottom.php' ?>

               <!------------ bottom html---------------->