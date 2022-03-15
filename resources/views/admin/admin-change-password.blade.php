@include('includes.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Form Validation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Admin Change Password</h4>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div>
                                <form id="pristine-valid-example" action="{{ route('update.change.password') }}" novalidate method="post">
                                    @csrf
                                    <input type="hidden" />
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Current Password</label>
                                                <input type="password" id="current_password" name="oldpassword" required class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>New Password</label>
                                                <input type="password" id="password" name="password" required class="form-control" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>Confirm Password</label>
                                                <input type="password" id="password_confirmation" name="password_confirmation" required class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- end row -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<footer class="footer">
    @include('includes.footer')
</footer>
</div>
<!-- end main content-->
<!-- Right Sidebar -->
<div class="right-bar">
    @include('includes.sidebar')
</div>
<!-- /Right-bar -->