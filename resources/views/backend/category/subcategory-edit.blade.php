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
                                    <h4 class="mb-sm-0 font-size-18">Edit SubCategory</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SubCategories</a></li>
                                            <li class="breadcrumb-item active">Edit SubCategory</li>
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
                                        <h4 class="card-title">Add SubCategory</h4>
                                        <p class="card-title-desc">PristineJS Vanilla javascript form validation library</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div>
                                            
                                            <form id="pristine-valid-specificfield" action="{{ route('subcategory.update') }}" method="post" enctype="multipart/form-data">
                                                @csrf    
                                                <input type="hidden" name="id" value="{{ $subcategory->id }}" />
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category Select</label>
                                                        <select name="category_id" class="form-select">
                                                            <option selected="" disabled="">Category Select</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected': '' }}>{{ $category->category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubCategory Name English</label>
                                                    <input type="text" name="subcategory_name_en" class="form-control" required value="{{ $subcategory->subcategory_name_en }}" id="subcategory_name_en" placeholder="Enter category name en"/>
                                                    @error('subcategory_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubCategory Name Hindi</label>
                                                    <input type="text" name="subcategory_name_hin" class="form-control" required value="{{ $subcategory->subcategory_name_hin }}" id="subcategory_name_hin" placeholder="Enter subcategory name hin"/>
                                                    @error('subcategory_name_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubCategory Slug English</label>
                                                    <input type="text" name="subcategory_slug_en" class="form-control" required value="{{ $subcategory->subcategory_slug_en }}" id="subcategory_slug_en" placeholder="Enter subcategory slug en"/>
                                                    @error('subcategory_slug_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubCategory Slug Hindi</label>
                                                    <input type="text" name="subcategory_slug_hin" class="form-control" required value="{{ $subcategory->subcategory_slug_hin }}" id="subcategory_slug_hin" placeholder="Enter subcategory slug hin"/>
                                                    @error('subcategory_slug_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-primary">Update SubCategory</button>
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