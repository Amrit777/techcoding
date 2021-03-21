<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
    $(document).ready(function() {
        CKEDITOR.replaceClass = "ckeditor";
        $(document).on("click", "a[id^=Recod_delete_]", function(e) {
            e.preventDefault();
            var url = $(this).attr('data-route');
            var id = $(this).attr('data-id');
            $('#applicantDeleteModal').modal('show');
            $(".remove-record-model").attr('action', url);
        });

        var getInitialProview = $("input[type=file]").attr('data-src');

        var getConfig = $("input[type=file]").attr('data-config');

        if (getConfig && getConfig != '') {
            getConfig = JSON.parse(getConfig)
        } else {
            getConfig = [];
        }
        var arr = (getInitialProview && getInitialProview != "") ? getInitialProview.split(",") : [];
        console.log();

        $("input[type=file]").fileinput({
            theme: "fa",
            initialPreview: arr,
            initialPreviewAsData: true,
            initialPreviewConfig: getConfig,
            deleteUrl: "{{ route('admin.delete_media') }}",
        });

        $("a[id^=looop_modal_]").click(function(e) {
            console.log("fff");
            e.preventDefault();
            var id = $(this).attr("data-id");
            // $("#looop_modal_"+id).trigger("click");
            var img = $("#media_" + id).attr("src");
            var key = $(this).attr("data-keyword");
            var alt = $(this).attr("data-alt");
            $("#media_id").val(id);
            $("#pathImage").attr("src", img);
            $("#alt").val(alt);
            $("#keyword").val(key);
            $("#exampleModal").modal("show")
        });

        $("#saveImageModal").click(function(e) {
            e.preventDefault();
            $("#image_param").submit();
        });

        $("#image_param").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('admin.media.save') }}",
                data: $(this).serialize(),
                cache: false,
                success: function(data) {
                    $("#exampleModal").modal("hide");
                    $("#looop_modal_" + data.id).attr("data-keyword", data.key);
                    $("#looop_modal_" + data.id).attr("data-alt", data.alt);
                }
            });
        });
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/fa/theme.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
{{-- <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script> --}}
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
{{-- V2 dashboard addons --}}
<script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

{{-- V2 dashboard addons end --}}
{{-- V3 dashboard addons start --}}
<script src="{{ asset('admin/dist/js/pages/dashboard3.js') }}"></script>
{{-- V3 dashboard addons end --}}

<!-- DataTables  & Plugins -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
