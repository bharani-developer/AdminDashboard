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
                 <li class="breadcrumb-item"><a href="#">Management</a>
                 </li>
                 <li class="breadcrumb-item active">Enrollment
                 </li>
               </ol>
             </div>
           </div>
           <br />
           <br>
           <div>
             <h3 class="content-header-title mb-0">Enrollment</h3>
             <br>
           </div>
         </div>


         <!-- Zero configuration table -->
         <section id="configuration">
           <div class="row">
             <div class="col-7">
               <div class="card">
                 <h5>Enrollment List</h5>
                 <div class="card-content collapse show">
                   <div class="card-body card-dashboard">

                     <div class="table-responsive">
                       <table class="table">
                         <tbody>
                           <tr class="border-solid">
                             <th>label 1 (Course)</th>
                             <td>Course</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 2 (Fee)
                             </th>
                             <td>Fee</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 3 (Date) </th>
                             <td>Date</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 4 (Batch ID) </th>
                             <td>Batch ID</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 5 (Trainer) </th>
                             <td>Trainer</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 6 (Duration) </th>
                             <td>Duration</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 7 (Session) </th>
                             <td>Session</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 8 (Available Seats) </th>
                             <td>Available Seats</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 9 (Venue) </th>
                             <td>Venue</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 10 (Timings)</th>
                             <td>Timings</td>
                           </tr>
                           <tr class="border-solid">
                             <th>label 11 (Days Count)</th>
                             <td>Days Count</td>
                           </tr>

                         </tbody>
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="content-header-right col-md-5 col-12">
               <h5>Update Enrollment</h5>
               <br>
               <br>
               <form class="validate1" action="#" id="curriculum-form" method="POST">

                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-group">
                       <label class="control-label" for="question">label 1 (Course)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 2 (Fee)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 3 (Date)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 4 (Batch ID)<<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 5 (Trainer)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 6 (Duration)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 7 (Session)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 8 (Available Seats)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 7 (Session)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 9 (Venue)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 10 (Timings)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="question">label 11 (Days Count)<span class="text-danger">*</span></label>
                       <input type="text" class="form-control" name="question" id="question" required />
                     </div>
                     <div class="form-group">
                       <label class="control-label" for="answer">Description<span class="text-danger"><span class="text-danger">*</span></label>
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
   <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel2"><i class="fas fa-hashtag"></i>
             Edit Course Intro</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
               <fieldset class="form-group">
                 <label for="basicInput">Heading<span class="text-danger">*<span class="text-danger">*</span></label>
                 <input type="text" class="form-control" id="basicInput">
               </fieldset>
             </div>

             <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
               <fieldset class="form-group">
                 <label for="basicInput">Description<span class="text-danger">*<span class="text-danger">*</span></label>
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