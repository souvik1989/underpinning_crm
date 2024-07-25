 <!-- latest jquery-->
    <script src="{{url('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{url('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap/bootstrap.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{url('assets/js/table-responsive-scrollbar-top.js')}}"></script>
    <script src="{{url('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{url('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{url('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{url('assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{url('assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{url('assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{url('assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{url('assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{url('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <script src="{{url('assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{url('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{url('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{url('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{url('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{url('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{url('assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{url('assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{url('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{url('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{url('assets/js/dashboard/default.js')}}"></script>
    <script src="{{url('assets/js/notify/index.js')}}"></script>
    <script src="{{url('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{url('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{url('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{url('assets/js/chat-menu.js')}}"></script>
    <script src="{{url('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.dataTables.js"></script>
    
    <script src="{{url('assets/js/chat-menu.js')}}"></script>
     {{-- <script src="{{url('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{url('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{url('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
    <script src="{{url('assets/js/editor/simple-mde/simplemde.min.js')}}"></script>
    <script src="{{url('assets/js/editor/simple-mde/simplemde.custom.js')}}"></script> --}}
   <script src="{{url('assets/js/login.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{url('assets/js/script.js')}}"></script>
    <script src="{{url('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
     <script src="{{ url('assets/js/iziToast.js') }}"></script>
      <script type="text/javascript">
    (function($){

        @if (Session::has('success'))
          iziToast.success({
              message: '{{ Session::get('success') }}',
              position: "topRight"
          });

        @elseif(Session::has('error'))
          iziToast.error({
              message: '{{ Session::get('error') }}',
              position: "topRight"
          });

        @elseif(Session::has('warning'))
          iziToast.warning({
              message: '{{ Session::get('warning') }}',
              position: "topRight"
          });
        @endif
    })(jQuery);

    @if ($errors->any())
        @php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        @endphp

        @foreach ($errors as $error)
        iziToast.error({
            message: '{{ __($error) }}',
            position: "topRight"
        });
        @endforeach
    @endif
  </script>
  </body>
</html>