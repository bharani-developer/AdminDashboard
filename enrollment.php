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
                 <li class="breadcrumb-item"><a href="#">Management</a>
                 </li>
                 <li class="breadcrumb-item active">Enrollment
                 </li>
               </ol>
             </div>
           </div>
           <br>
           <br>
           <h3 class="content-header-title mb-0">Enrollment</h3>
         </div>
         <div class="content-header-right col-md-6 col-12">
                   <div class="btn-group float-md-right">
                       <div class="btn-group" role="group">
                        
                               <button class="btn btn-outline-primary" id="btnGroupDrop1" type="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i> Edit Enrollment</button>

                       </div>
                   </div>
               </div>
       </div>
     
       <div class="content-body">
         <!-- Basic Tables start -->
         <div class="row">
           <div class="col-12">
             <div class="card">

               <div class="card-content collapse show">
                 <div class="card-body">



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
                           <th>label 3 (Date)	</th>
                           <td>Date</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 4 (Batch ID)	</th>
                           <td>Batch ID</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 5 (Trainer)	</th>
                           <td>Trainer</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 6 (Duration)	</th>
                           <td>Duration</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 7 (Session)	</th>
                           <td>Session</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 8 (Available Seats)	</th>
                           <td>Available Seats</td>
                         </tr>
                         <tr class="border-solid">
                           <th>label 9 (Venue)	 </th>
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

               <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">


                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel2"><i class="fas fa-hashtag"></i> Enrollments</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 1 (Course)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 2 (Fee)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 3 (Date)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 4 (Batch ID)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 5 (Trainer)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 6 (Duration)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 7 (Session)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 8 (Available Seats)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 9 (Venue)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 10 (Timings)</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">label 11 (Days Count)</label>
                                                                <input type="text" class="form-control" id="basicInput">
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
               </div>

               <!------------ bottom html ---------------->

               <?php include_once 'includes/bottom.php' ?>

               <!------------ bottom html---------------->