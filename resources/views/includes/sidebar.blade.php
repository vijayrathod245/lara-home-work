
<div data-simplebar class="h-100">
    <div class="rightbar-title d-flex align-items-center bg-dark p-3">

        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
        </a>
    </div>

    <!-- Settings -->
    <hr class="m-0" />

    <div class="p-4">
        <h6 class="mb-3">Layout</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout"
                id="layout-vertical" value="vertical">
            <label class="form-check-label" for="layout-vertical">Vertical</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout"
                id="layout-horizontal" value="horizontal">
            <label class="form-check-label" for="layout-horizontal">Horizontal</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode"
                id="layout-mode-light" value="light">
            <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode"
                id="layout-mode-dark" value="dark">
            <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-width"
                id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
            <label class="form-check-label" for="layout-width-fuild">Fluid</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-width"
                id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-position"
                id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
            <label class="form-check-label" for="layout-position-fixed">Fixed</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-position"
                id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
            <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="topbar-color"
                id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
            <label class="form-check-label" for="topbar-color-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="topbar-color"
                id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
            <label class="form-check-label" for="topbar-color-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
            <label class="form-check-label" for="sidebar-size-default">Default</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size"
                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
            <label class="form-check-label" for="sidebar-color-light">Light</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color"
                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Direction</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-direction"
                id="layout-direction-ltr" value="ltr">
            <label class="form-check-label" for="layout-direction-ltr">LTR</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-direction"
                id="layout-direction-rtl" value="rtl">
            <label class="form-check-label" for="layout-direction-rtl">RTL</label>
        </div>

    </div>

</div> <!-- end slimscroll-menu-->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- choices js -->
<script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<!-- init js -->
<script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>


<!-- Datatable init js -->
<!--<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>-->

<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
        $(document).on('click', '', function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            });
        });
    });
</script>-->

</body>

<!-- Mirrored from themesbrand.com/minia/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jan 2022 14:07:20 GMT -->
</html>