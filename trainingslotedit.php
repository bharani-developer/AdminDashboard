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
                               <li class="breadcrumb-item"><a href="index.html">Training Slot</a>
                               </li>

                               <li class="breadcrumb-item active">Edit Training Slot
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
                                       <h4 class="card-title">Edit Training Slot</h4>
                                   </div>

                                   <div class="card-content">
                                       <form class="validate-form" method="POST" action="example.php" enctype="multipart/form-data">

                                           <div class="card-body">

                                               <div class="row">
                                                   <div class="col-xl-8 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Course </label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Open this for Course List</option>
                                                               <option value="1">Laravel</option>
                                                               <option value="2">Scrum</option>
                                                               <option value="3">Php</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Type </label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Select Type</option>
                                                               <option value="1">Online</option>
                                                               <option value="2">Offline</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Total Seats</label>
                                                           <input  class="form-control touchspin" type="text" value="1">

                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Batch ID</label>
                                                           <input name="short_name" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Waiting List</label>
                                                           <input name="short_name" type="text" class="form-control touchspin" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Trainer 1 </label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Open this for Traiers</option>
                                                               <option value="1">Laravel</option>
                                                               <option value="2">Scrum</option>
                                                               <option value="3">Php</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Trainer 2</label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Open this for Trainers</option>
                                                               <option value="1">Laravel</option>
                                                               <option value="2">Scrum</option>
                                                               <option value="3">Php</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="customSelect">Course Category</label>
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
                                                           <label for="basicInput">Venue</label>
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
                                                           <label for="basicInput">Duration</label>
                                                           <input name="video_url" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Day's Count</label>
                                                           <input name="video_url" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">Start Date 1</label>
                                                           <input type="date" class="form-control" id="date2">
                                                       </fieldset>
                                                   </div>

                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">End Date 1</label>
                                                           <input type="date" class="form-control" id="date2">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Class Type</label>
                                                           <select class="custom-select block" id="customSelect">
                                                               <option selected>Open this for Type</option>
                                                               <option value="1">Full Day</option>
                                                               <option value="2">Half Day</option>
                                                           </select>
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">start Date 2</label>
                                                           <input type="date" class="form-control" id="date2">
                                                       </fieldset>
                                                   </div>

                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInput">End Date 2</label>
                                                           <input type="date" class="form-control" id="date2">
                                                       </fieldset>
                                                   </div>
                                                   <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                       <fieldset class="form-group">
                                                           <label for="basicInputFile">Time Slot</label>
                                                           <input name="video_url" type="text" class="form-control" id="basicInput">
                                                       </fieldset>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-12">
                                               <button type="submit" class="btn btn-primary">Submit</button>
                                           </div>
                                       </form>
                                   </div>
                   </section>
                   <!-- Basic Inputs end -->
               </div>
           </div>
       </div>
















       <!------------ bottom html ---------------->

       <?php include_once 'includes/bottom.php' ?>

       <!------------ bottom html---------------->