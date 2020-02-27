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
    <!-- Date 
    <div class="container-fluid">
        <div class="row ml-auto">
            <div class="col-lg-6">
                <div class="row">

                    <div class="col-1g-8">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      -->
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $totalPresale;  ?></h2>

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
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $totalWorkorder; ?></h2>

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
                            <h2 class="text-primary mb-1 font-weight-medium"><?= $totalAll; ?></h2>

                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total</h6>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-8">
                            <h4 class="card-title" style="margin-left:10px">Line Chart</h4>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4">
                            <button type="button" id="downloadline" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Download Line chart"><i class="fa fa-download"></i></button>
                        </div>
                    </div>
                    <canvas id="line-chart" height="145"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-xs-10">
                            <h4 class="card-title" style="margin-left:10px">Pie Chart</h4>
                        </div>
                        <div class="col-lg-2 col-md-1 col-xs-2">
                            <button class="btn btn-primary btn-sm" id="downloadpie" data-toggle="tooltip" data-placement="bottom" title="Download Pie chart"><i class="fa fa-download"></i></button>
                        </div>
                    </div>

                    <canvas id="pie-chart" height="330"></canvas>
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

                    <!--Dropdown category-->
                    <div class="row">
                        <div class="col-md-8">

                            <form action="" method="POST">
                                <div class="form-group">
                                    <select name="keyword" id="keyword" class="form-control-sm">
                                        <option value="0">Category</option>
                                        <option value="Presale">Presale</option>
                                        <option value="Workorder">Workorder</option>
                                    </select>
                                    <Button type="submit" class="btn btn-primary btn-sm">Cari</Button>
                                </div>
                            </form>



                        </div>
                        <div class="col-md-4 float-right">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Tanggal : </label>
                                    <input type="text" class="form-control-sm" id="tgl" name="tgl">
                                    <Button type="submit" class="btn btn-primary btn-sm">Filter</Button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End dropdown category-->


                    <div class="table-responsive">
                        <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Analyst</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tampil as $t) :
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $t['created_at']; ?></td>
                                        <td><?= $t['name']; ?></td>
                                        <td><?= $t['analyst']; ?></td>
                                        <td><?= $t['cat']; ?></td>
                                        <?php $no++; ?>
                                    </tr>
                                <?php endforeach; ?>
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