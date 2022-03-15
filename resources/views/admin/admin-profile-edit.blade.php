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
                            <h4 class="card-title">Admin Profile Edit</h4>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div>
                                <form id="pristine-valid-example" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" novalidate method="post">
                                @csrf    
                                <input type="hidden" />
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Admin User Name</label>
                                                <input type="text" name="name" value="{{ $editData->name }}" required class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Admin Email</label>
                                                <input type="email" name="email" value="{{ $editData->email }}" required class="form-control" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Admin Profile Image</label>
                                                <input type="file" name="profile_photo_path" id="image" required class="form-control" name="file" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <img id="imageshow" src="{{ (!empty($editData->profile_photo_path)) ? url('upload/admin-images/'.$editData->profile_photo_path): url('upload/avatar-1.jpg') }}" style="width:100px; height:100px; border-radius: 100%;" />
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#imageshow').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
<!-- Right Sidebar -->
<div class="right-bar">
    @include('includes.sidebar')
</div>
<!-- /Right-bar -->