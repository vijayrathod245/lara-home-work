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
                                    <h4 class="mb-sm-0 font-size-18">Brands</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Brands</li>
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
                                        <h4 class="card-title">Default Brand</h4>
                                        <p class="card-title-desc">DataTables has most features enabled by
                                            default, so all you need to do to use it with your own tables is to call
                                            the construction function: <code>$().DataTable();</code>.
                                        </p>
                                    </div>
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                    
                                                <th>Brand En</th>
                                                <th>Brand Hin</th>
                                                <th>Brand Slug En</th>
                                                <th>Brand Slug Hin</th>
                                                <th>Brand Image</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($brands as $item)
                                            <tr>
                                                
                                                <td>{{ $item->brand_name_en }}</td>
                                                <td>{{ $item->brand_name_hin }}</td>
                                                <td>{{ $item->brand_slug_en }}</td>
                                                <td>{{ $item->brand_slug_hin }}</td>
                                                <td><img src="{{ asset($item->brand_image) }}" style="width:50px; height: 50px;" /></td>
                                                <td>
                                                    <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('brand.delete', $item->id) }}" class="btn btn-danger">Delete</a>
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
