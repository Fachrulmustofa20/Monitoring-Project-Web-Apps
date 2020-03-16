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
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">User Management</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>" class="text-muted">Menu</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">User Management</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ================================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">


        <!-- 
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

        <!-- multi-column ordering -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-9 col-6">
                                <h4 class="card-title">Presale And Workorder Table</h4>
                                <!--Dropdown category-->

                                <!--End dropdown category-->
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="<?= base_url('home/download'); ?>"><button id="down-report" class="btn btn-danger btn-sm ml-5" type="submit">Download Report <i class="fa fa-download"></i></button></a>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table border="0" cellspacing="5" cellpadding="5">
                                <tbody>
                                    <tr>
                                        <td>Minimum age:</td>
                                        <td><input type="text" id="min" name="min"></td>
                                    </tr>
                                    <tr>
                                        <td>Maximum age:</td>
                                        <td><input type="text" id="max" name="max"></td>
                                    </tr>
                                </tbody>
                            </table>
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