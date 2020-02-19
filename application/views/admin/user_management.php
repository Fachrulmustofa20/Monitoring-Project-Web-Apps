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
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <h4 class="card-title">Users</h4>
                            <div class="ml-auto">
                                <!-- Signup modal content -->
                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="text-center mt-2 mb-4">
                                                    <h3>Add Users</h1>
                                                </div>
                                                <form class="pl-3 pr-3" action="<?= base_url('user_management/add_user'); ?>" method="POST">
                                                    <div class="form-group">
                                                        <label for="name">Full Name</label>
                                                        <input class="form-control" type="text" id="name" name="name" placeholder="Input Full Name" value="<?= set_value('name'); ?>" required>
                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input class="form-control" type="email" id="email" name="email" placeholder="Input your Email Address" value="<?= set_value('email'); ?>" required>
                                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input class="form-control" type="password" id="password1" name="password1" placeholder="Enter your password" required>
                                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="password2" name="password2" placeholder="Enter your confrim password" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <select class="custom-select" id="role" name="role" required>
                                                            <option selected disabled value="">Choose Role...</option>
                                                            <?php foreach ($role->result_array() as $r) : ?>
                                                                <option value="<?= $r['id_role']; ?>"><?= $r['role']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit">Submit</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#signup-modal"><i data-feather="user-plus" class="feather-icon"></i> Add Users</button>

                                <?php $no = 0;
                                foreach ($users as $u) : $no++; ?>
                                    <!-- update modal content -->
                                    <div id="modal-edit<?= $u['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center mt-2 mb-4">
                                                        <h3>Update Users</h1>
                                                    </div>
                                                    <form class="pl-3 pr-3" action="<?= base_url('user_management/edit'); ?>" method="POST">

                                                        <input type="hidden" name="id" value="<?= $u['id']; ?>">

                                                        <div class="form-group">
                                                            <label for="emailaddress">Email address</label>
                                                            <input class="form-control" type="email" id="email" name="email" value="<?= $u['email']; ?>" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <input class="form-control" type="text" id="name" name="name" placeholder="Input Full Name" value="<?= $u['name']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input class="form-control" type="password" id="password1" name="password1" placeholder="Enter your password" value="<?= $u['password']; ?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="role">Role</label>
                                                            <select class="custom-select" id="role" name="role">
                                                                <?php foreach ($role->result_array() as $r) : ?>
                                                                    <?php if ($u['role_id'] == $r['id_role']) : ?>
                                                                        <option value="<?= $r['id_role']; ?>" selected><?= $r['role']; ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $r['id_role']; ?>"><?= $r['role']; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <button class="btn btn-primary" type="submit"> Submit</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Full Name
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">User Role
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">Date Created</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $u) : ?>
                                        <tr>
                                            <td class="border-top-0">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="mr-3">
                                                        <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" alt="user" class="rounded-circle" width="45" height="45" />
                                                    </div>
                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium"><?= $u['name']; ?></h5>
                                                        <span class="text-muted font-14"><?= $u['email']; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted font-14 text-center"><?= $u['role'] ?></td>
                                            <td class="border-top-0 text-muted font-14 text-center"><?= date('d F Y', $u['date_created']); ?></td>
                                            <td class="border-top-0 text-center">
                                                <button data-toggle="modal" data-target="#modal-edit<?= $u['id']; ?>" class="btn btn-warning btn-sm text-white"><i data-feather="edit" class="feather-icon"></i> Update</button>
                                                <a onclick="deleteConfirm('<?= base_url('user_management/delete/' . $u['id']); ?>')" href="#!" class="btn btn-danger btn-sm text-white"><i data-feather="trash-2" class="feather-icon"></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- Delete Confirmation-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">You won't be able to revert this!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                </div>
            </div>
        </div>
    </div>
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