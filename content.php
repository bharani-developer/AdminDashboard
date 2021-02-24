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
                                <li class="breadcrumb-item active">Content
                                </li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h3 class="content-header-title mb-0">Content</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">

                <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1 square" data-toggle="modal" data-target="#iconModal"><i class="fa fa-edit"></i> Edit</button>


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
                                                    <th>Facebook</th>
                                                    <td>https://www.facebook.com/
                                                    </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Twitter
                                                    </th>
                                                    <td>https://twitter.com/nexevo


                                                    </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Linkedin</th>
                                                    <td>https://www.linkedin.com/company/nexevo/
                                                    </td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Instagram</th>
                                                    <td>https://inagram.com/nexevo</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Youtube </th>
                                                    <td>https://youtube.com/nexevo</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Email</th>
                                                    <td>admin@nexevo.in/</td>
                                                </tr>
                                                <tr class="border-solid">
                                                    <th>Mobile </th>
                                                    <td>+91 7639666411
                                                    </td>
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
                                                    <h4 class="modal-title" id="myModalLabel2"><i class="fas fa-hashtag"></i> Content</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Facebook</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Twitter</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Linkedin</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Youtube</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Instagram</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Email</label>
                                                                <input type="text" class="form-control" id="basicInput">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Mobile</label>
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
                                    <!------------ bottom html ---------------->

                                    <?php include_once 'includes/bottom.php' ?>

                                    <!------------ bottom html---------------->