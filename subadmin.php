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
                       <div class="breadcrumb-wrapper">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html">Home</a>

                               <li class="breadcrumb-item active">Sub Admin
                               </li>

                           </ol>
                       </div>
                   </div>
                   <br />
                   <br>
                   <div>
                       <h3 class="content-header-title mb-0">Sub Admin</h3>
                       <br>
                   </div>
               </div>


               <!-- Zero configuration table -->
               <section id="configuration">
                   <div class="row">
                       <div class="col-7">
                           <div class="card">
                               <h5>Sub Admin List</h5>
                               <div class="card-content collapse show">
                                   <div class="card-body card-dashboard">

                                       <table class="table table-striped table-bordered zero-configuration">
                                           <thead>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Name</th>
                                                   <th>Role</th>
                                                  
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>1</td>
                                                   <td>Haj Mohamed</td>
                                                   <td>Trainer</td>
                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm"><i class="fa fa-times"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>2</td>
                                                   <td>Habeeb</td>
                                                   <td>Trainer</td>
                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm"><i class="fa fa-times"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>3</td>
                                                   <td>Python for Data Science</td>
                                                   <td>Admin</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm"><i class="fa fa-times"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>4</td>
                                                   <td>Python for Data Science</td>
                                                   <td>Admin</td>
                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm"><i class="fa fa-times"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>5</td>
                                                   <td>Sub admin</td>
                                                   <td>Admin</td>
                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm"><i class="fa fa-times"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                             
                                           </tbody>
                                           
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="content-header-right col-md-5 col-12">
                           <h5>Add Sub Admin</h5>
                           <br>
                           <br>
                           <form class="validate1" action="#" id="curriculum-form" method="POST">

                               <div class="row">


                                   <div class="col-md-12">
                                       <div class="form-group">
                                           
                                       <label class="control-label" for="question"> Email<font class="text-danger">*</font></label>
                                           <input class="form-control" type="email" id="inputEmail1" placeholder="xyz@example.com" required>
                                           <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question"> Name<font class="text-danger">*</font></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>

                                       <div class="form-group">
                                           <label class="control-label" for="question">Password<font class="text-danger">*</font></label>
                                           <input type="password" class="form-control" name="question" id="question" required />
                                       </div>
                                   </div>

                               </div>
                               <input type="hidden" name="type" value="2">
                               <div class="col-12">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </div>

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