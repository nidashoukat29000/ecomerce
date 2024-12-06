<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-repeater.min.js') }}"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
<!-- END: Page JS-->
<!-- BEGIN: sweetalert2 JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
{{-- <script>
        $(window).on('load', function() {
            var table;
        })
    </script> --}}
<!-- END: sweetalert2 JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/ui/ui-feather.min.js') }}"></script>
<!-- END: Page JS-->

<script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>


<script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
{{-- 
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js')}}"></script> --}}
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>


{{-- <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>  --}}


<script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>

<script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
{{-- <script src="{{asset('app-assets/js/scripts/tables/table-datatables-basic.min.js')}}"></script> --}}

<script src="{{ asset('/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/extensions/ext-component-sweet-alerts.js') }}"></script>
<!-- END: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/auth-login.js') }}"></script>

<script src="{{ asset('app-assets/js/scripts/pages/auth-register.js') }}"></script>

@include('dashboard.layout.partials.datatable_script')
<script src="{{ asset('assets/js/my-custom.js') }}"></script>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
