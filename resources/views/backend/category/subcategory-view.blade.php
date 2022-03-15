
@include('includes.header')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
           <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Sub Categories</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Sub Categories</li>
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
                                        <h4 class="card-title">Default SubCategory</h4>
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
                                                <th>Sub Category En</th>
                                                <th>Sub Category Hin</th>
                                                <th>Sub Category Slug En</th>
                                                <th>Sub Category Slug Hin</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($subcategory as $item)
                                            <tr>
                                                <!--<td>{{ $item->category_id }}</td>-->
                                                <td>{{ $item['category']['category_name_en'] }}</td>
                                                <td>{{ $item->subcategory_name_en }}</td>
                                                <td>{{ $item->subcategory_name_hin }}</td>
                                                <td>{{ $item->subcategory_slug_en }}</td>
                                                <td>{{ $item->subcategory_slug_hin }}</td>
                                                <td>
                                                    <a href="{{ route('subcategory.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('subcategory.delete', $item->id) }}" class="btn btn-danger">Delete</a>
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
