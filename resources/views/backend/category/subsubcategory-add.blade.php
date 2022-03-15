@include('includes.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                    <h4 class="mb-sm-0 font-size-18">Add SubSubCategory</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SubSubCategories</a></li>
                                            <li class="breadcrumb-item active">Add SubSubCategory</li>
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
                                        <h4 class="card-title">Add SubSubCategory</h4>
                                        <p class="card-title-desc">PristineJS Vanilla javascript form validation library</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div>
                                            
                                            <form action="{{ route('subsubcategory.store') }}" method="post">
                                                @csrf    
                                                
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category Select</label>
                                                        <select name="category_id" class="form-select">
                                                            <option value="" selected="" disabled="">Category Select</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">SubCategory Select</label>
                                                        <select name="subcategory_id" class="form-select">
                                                            <option value="" selected="" disabled="">SubCategory Select</option>
                                                        </select>
                                                        @error('subcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubSubCategory Name English</label>
                                                    <input type="text" name="subsubcategory_name_en" class="form-control" required id="subsubcategory_name_en" placeholder="Enter subsubcategory name en"/>
                                                    @error('subsubcategory_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubSubCategory Name Hindi</label>
                                                    <input type="text" name="subsubcategory_name_hin" class="form-control" required id="subsubcategory_name_hin" placeholder="Enter subsubcategory name hin"/>
                                                    @error('subsubcategory_name_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubSubCategory Slug English</label>
                                                    <input type="text" name="subsubcategory_slug_en" class="form-control" required id="subsubcategory_slug_en" placeholder="Enter subsuncategory slug en"/>
                                                    @error('subsubcategory_slug_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">SubSubCategory Slug Hindi</label>
                                                    <input type="text" name="subsubcategory_slug_hin" class="form-control" required id="subsubcategory_slug_hin" placeholder="Enter subsubcategory slug hin"/>
                                                    @error('subsubcategory_slug_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-primary">Add SubSubCategory</button>
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

<script type="text/javascript">
        $(document).ready(function(){
            //alert('Hi');
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                //alert(category_id);
                if(category_id){
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/"+category_id,
                        type: "GET",
                        dataType: "json",
                        success:function(data){
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                            });
                        },
                    });
                }else{
                   alert('danger');
                }
            });
        });
    </script>
