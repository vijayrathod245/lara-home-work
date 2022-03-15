@include('includes.header')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
           <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Brand</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Brands</a></li>
                                            <li class="breadcrumb-item active">Add Brand</li>
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
                                        <h4 class="card-title">Add Brand</h4>
                                        <p class="card-title-desc">PristineJS Vanilla javascript form validation library</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div>
                                            
                                            <form id="pristine-valid-specificfield" action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf    
                                                <input type="hidden" />
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Brand Name English</label>
                                                    <input type="text" name="brand_name_en" class="form-control" required id="brand_name_en" placeholder="Enter brand name en"/>
                                                    @error('brand_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Brand Name Hindi</label>
                                                    <input type="text" name="brand_name_hin" class="form-control" required id="brand_name_hin" placeholder="Enter brand name hin"/>
                                                    @error('brand_name_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Brand Slug English</label>
                                                    <input type="text" name="brand_slug_en" class="form-control" required id="brand_slug_en" placeholder="Enter brand slug en"/>
                                                    @error('brand_slug_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Brand Slug Hindi</label>
                                                    <input type="text" name="brand_slug_hin" class="form-control" required id="brand_slug_hin" placeholder="Enter brand slug hin"/>
                                                    @error('brand_slug_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Brand Image</label>
                                                    <input type="file" name="brand_image" class="form-control" id="brand_image"/>
                                                    @error('brand_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-primary">Add Brand</button>
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