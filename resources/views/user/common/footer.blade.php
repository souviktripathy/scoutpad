<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 .</strong>
    All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
         <input type="hidden" id="sp_base_url" value="{{ url('/') }}">
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('public/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ URL::asset('public/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ URL::asset('public/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('public/admin/dist/js/adminlte.js') }}"></script>
<script src="{{ URL::asset('public/admin/dist/js/jquery-confirm.min.js') }}"></script>  
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('public/admin/dist/js/demo.js') }}"></script>
<script src="{{ URL::asset('public/common/jquery.validate.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('public/admin/js/admin_custom.js') }}"></script>
</body>
</html>
