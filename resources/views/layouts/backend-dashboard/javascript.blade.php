<!-- jQuery -->
<script src="{{asset('assets/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/AdminLTE/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/AdminLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/AdminLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/AdminLTE/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/AdminLTE/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/AdminLTE/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/AdminLTE/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
        $("#datatable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
        $('#datatable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>