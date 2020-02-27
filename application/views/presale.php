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
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Presale</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>" class="text-muted">Menu</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Presale</li>
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
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">

                <form action="" method="post">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control-sm" id="tgl" name="tgl">
                        <Button type="submit" class="btn btn-primary btn-sm">Filter</Button>
                    </div>
                </form>

            </div>
        </div>
        <!-- Content Page -->
        <!-- 
        <div class="row ml-auto">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control" type="text" id="reportrange" name="date">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      -->
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


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Date Presale</th>
                                        <th>Name Presale</th>
                                        <th>Analyst</th>
                                        <?php if ($user['role_id'] == 1) { ?>
                                            <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($presale as $p) :
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $p['created_at'] ?></td>
                                            <td><?= $p['name']; ?></td>
                                            <td><?= $p['analyst']; ?></td>
                                            <?php if ($user['role_id'] == 1) { ?>
                                                <td class="text-center">
                                                    <a class="btn btn-success btn-sm text-white" href="#"></i> Detail</a>
                                                </td>
                                            <?php } ?>
                                            <?php $no++;  ?>
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