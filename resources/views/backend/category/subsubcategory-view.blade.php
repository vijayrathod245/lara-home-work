
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
                                    <h4 class="mb-sm-0 font-size-18">Sub Sub Categories</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Sub Sub Categories</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default SubSubCategory</h4>
                                        <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p>
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                    			<th>Category</th>
                                                <th>SubCategory</th>
                                                <th>SubSubCategory En</th>
                                                <th>SubSubCategory Hin</th>
                                                <th>SubSubCategory Slug En</th>
                                                <th>SubSubCategory Slug Hin</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                              @foreach($subsubcategory as $item)  
                                            <tr>
                                                <td>{{ $item['category']['category_name_en'] }}</td>
                                                <td>{{ $item['subcategory']['subcategory_name_en'] }}</td>
                                                <td>{{ $item->subsubcategory_name_en }}</td>
                                                <td>{{ $item->subsubcategory_name_hin }}</td>
                                                <td>{{ $item->subsubcategory_slug_en }}</td>
                                                <td>{{ $item->subsubcategory_slug_hin }}</td>
                                                <td>
                                                    <a href="{{ route('subsubcategory.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('subsubcategory.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        
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
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "{{ url('/category/subcategory/aax') }}"+category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                        var d = $('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option');
                        });
                    }
                });
            }else{
                alert('danger');
            }
        });
    });
</script>