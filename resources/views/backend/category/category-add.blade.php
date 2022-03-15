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
                                    <h4 class="mb-sm-0 font-size-18">Add Category</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                                            <li class="breadcrumb-item active">Add Category</li>
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
                                        <h4 class="card-title">Add Category</h4>
                                        <p class="card-title-desc">PristineJS Vanilla javascript form validation library</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div>
                                            
                                            <form id="pristine-valid-specificfield" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf    
                                                <input type="hidden" />
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Category Name English</label>
                                                    <input type="text" name="category_name_en" class="form-control" required id="category_name_en" placeholder="Enter category name en"/>
                                                    @error('category_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Category Name Hindi</label>
                                                    <input type="text" name="category_name_hin" class="form-control" required id="category_name_hin" placeholder="Enter category name hin"/>
                                                    @error('category_name_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Category Slug English</label>
                                                    <input type="text" name="category_slug_en" class="form-control" required id="category_slug_en" placeholder="Enter category slug en"/>
                                                    @error('category_slug_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Category Slug Hindi</label>
                                                    <input type="text" name="category_slug_hin" class="form-control" required id="category_slug_hin" placeholder="Enter category slug hin"/>
                                                    @error('category_slug_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Category Icon</label>
                                                    <input type="text" name="category_icon" class="form-control" id="category_icon"/>
                                                    @error('category_icon')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-primary">Add Category</button>
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