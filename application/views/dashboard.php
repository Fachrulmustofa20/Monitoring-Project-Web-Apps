<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hello <?= $user['name']; ?></h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- Date Picker -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <!-- End Date Picker -->
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">236</h2>

                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Presale</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="grid"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">100</h2>

                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Workorder</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="briefcase"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-primary mb-1 font-weight-medium">336</h2>

                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total All</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="list"></i></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- *************************************************************** -->
        <!-- Eend First Cards -->
        <!-- *************************************************************** -->

        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body" style="height: 450px;">
                        <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-10 col-xs-8">
                                <h4 class="card-title" style="margin-left:10px">Line Chart</h4>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4">
                                <button id="down-line" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Download Line chart"><i class="fa fa-download"></i></button>
                            </div>
                        </div>
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body" style="height: 450px;">
                        <div class="row">
                            <div class="col-lg-10 col-md-11 col-xs-10">
                                <h4 class="card-title" style="margin-left:10px">Pie Chart</h4>
                            </div>
                            <div class="col-lg-2 col-md-1 col-xs-2">
                                <button class="btn btn-primary btn-sm" id="down-pie" data-toggle="tooltip" data-placement="bottom" title="Download Pie chart"><i class="fa fa-download"></i></button>
                            </div>
                        </div>

                        <canvas id="pie-chart" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <!-- *************************************************************** -->
        <!-- End Sales Charts Section -->
        <!-- *************************************************************** -->


        <!-- multi-column ordering -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Presale And Workorder Table</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Date Presale</th>
                                        <th>Name Presale</th>
                                        <th>Analyst</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->