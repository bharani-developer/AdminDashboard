   <!------------ top html ---------------->

   <?php include_once 'includes/top.php' ?>

   <!-------- top html end ---------------->


   <!-------- fixed-top nav ---------------->

   <?php include_once 'includes/topnav.php' ?>

   <!-------- fixed-top end ---------------->


   <!-------- fixed-side nav ---------------->

   <?php include_once 'includes/sidenav.php' ?>


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
           <div class="content-header ">
               <div class="content-header-left ">
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
                   <div>
                       <h3 class="content-header-title mb-0">Page Management</h3>
                       <br>
                   </div>
               </div>


               <!-- Zero configuration table -->
               <section id="configuration">
                   <div class="row">
                       <div class="col-7">
                           <div class="card">
                               <h5>Page</h5>
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

                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="content-header-right col-md-5 col-12">
                           <h5>Update Page</h5>
                           <br>
                           <br>
                           <form class="validate1" action="#" id="curriculum-form" method="POST">

                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label class="control-label" for="question">Page Name<span class="text-danger">*</span></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Page Title<span class="text-danger">*</span></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="answer">Meta Description<span class="text-danger">*</span></label>
                                           <textarea class="form-control editable" rows="5" name="answer" id="answer" required></textarea>
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="answer">Meta Keywords<span class="text-danger">*</span></label>
                                           <textarea class="form-control editable" rows="5" name="answer" id="answer" required></textarea>
                                       </div>
                                   </div>
                               </div>
                               <button type="submit" class="btn btn-primary">Update</button>
                           </form>
                       </div>
                   </div>
               </section>
               <!--/ Zero configuration table -->
           </div>
       </div>

   </div>

   <!-- ////////////////////////////////////////////////////////////////////////////-->


   <!------------ bottom html ---------------->

   <?php include_once 'includes/bottom.php' ?>

   <!------------ bottom html---------------->