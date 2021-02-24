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
                               </li>
                               <li class="breadcrumb-item "><a href="#">Manageent</a>
                               </li>
                               <li class="breadcrumb-item active">Team Members
                               </li>

                           </ol>
                       </div>
                   </div>
                   <br />
                   <br>
                   <div>
                       <h3 class="content-header-title mb-0">Team Members</h3>
                       <br>
                   </div>
               </div>


               <!-- Zero configuration table -->
               <section id="configuration">
                   <div class="row">
                       <div class="col-7">
                           <div class="card">
                               <h5>Team Members List</h5>
                               <div class="card-content collapse show">
                                   <div class="card-body card-dashboard">

                                       <table class="table table-striped table-bordered zero-configuration">
                                           <thead>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Name</th>
                                                   <th class="justify-content-center">Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>1</td>
                                                   <td>Sharan Mangalore </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>2</td>
                                                   <td>Stuart Turner</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>3</td>
                                                   <td>Dennis Phee</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>4</td>
                                                   <td>Amol Pradhan </td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>
                                               <tr>
                                                   <td>5</td>
                                                   <td>Christine Johnson</td>

                                                   <td>
                                                       <div class="form-group text-center">
                                                           <!-- Floating icon button Regular -->

                                                           <a href="#" class="btn btn-float btn-square btn-warning btn-sm" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i></a>
                                                           <a href="#" class="btn btn-float btn-square btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                       </div>
                                               </tr>


                                           </tbody>
                                           <tfoot>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Heading</th>

                                                   <th>Action</th>
                                               </tr>
                                           </tfoot>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="content-header-right col-md-5 col-12">
                           <h5>Add Team Member</h5>
                           <br>
                           <br>
                           <form class="validate1" action="#" id="curriculum-form" method="POST">

                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group">
                                           <label class="control-label" for="question">Name<font class="text-danger">*</font></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Designation<font class="text-danger">*</font></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Order<font class="text-danger">*</font></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="question">Linkedin<font class="text-danger">*</font></label>
                                           <input type="text" class="form-control" name="question" id="question" required />
                                       </div>
                                       <div class="form-group">
                                           <label class="control-label" for="answer">Description<font class="text-danger">*</font></label>
                                           <textarea class="form-control editable" rows="5" name="answer" id="answer" required></textarea>
                                       </div>
                                       <div class="form-group">
                                           <fieldset class="form-group">
                                               <label for="basicInputFile">Image<font class="text-danger">*</font></label>
                                               <div class="custom-file">
                                                   <input name="course_logo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                   <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                               </div>
                                           </fieldset>
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
   <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title" id="myModalLabel2"><i class="fas fa-hashtag"></i>
                       Edit Team Member</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <div class="row">
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label class="control-label" for="question">Name<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" name="question" id="question" required />
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label class="control-label" for="question">Designation<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" name="question" id="question" required />
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label class="control-label" for="question">Order<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" name="question" id="question" required />
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label class="control-label" for="question">Linkedin<font class="text-danger">*</font></label>
                               <input type="text" class="form-control" name="question" id="question" required />
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Description<font class="text-danger">*</font></label>
                               <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Description<font class="text-danger">*</font></label>
                               <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInput">Description<font class="text-danger">*</font></label>
                               <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                           </fieldset>
                       </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                           <fieldset class="form-group">
                               <label for="basicInputFile">Image<font class="text-danger">*</font></label>
                               <div class="custom-file">
                                   <input name="course_logo" type="file" class="custom-file-input" id="inputGroupFile01">
                                   <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                               </div>
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