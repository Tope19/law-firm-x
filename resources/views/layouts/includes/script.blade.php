<!-- core:js -->
	<script src="{{ $admin_source }}/assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ $admin_source }}/assets/vendors/chartjs/Chart.min.js"></script>
  <script src="{{ $admin_source }}/assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="{{ $admin_source }}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="{{ $admin_source }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{ $admin_source }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="{{ $admin_source }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->

    <!-- plugin js for this page -->
    <script src="{{ $admin_source }}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ $admin_source }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
      <!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ $admin_source }}/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="{{ $admin_source }}/assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{ $admin_source }}/assets/js/dashboard.js"></script>
  <script src="{{ $admin_source }}/assets/js/datepicker.js"></script>
	<!-- end custom js for this page -->

    <!-- custom js for this page -->
  <script src="{{ $admin_source }}/assets/js/data-table.js"></script>
	<!-- end custom js for this page -->

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                     headers:{
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });

                 $('#bookingForm').submit(function(e){
                     e.preventDefault();

                     var first_name = $('#first_name').val();
                     var last_name = $('#last_name').val();
                     var email = $('#email').val();
                     var dob = $('#dob').val();
                     var profile_image = $('#profile_image').val();
                     var case_details = $('#case_details').val();
                     $('.viewForm').css('display','none');
                     $('#msgs').html('Processing.....');


                    $.ajax({
                        url: "{{ route('client.store') }}",
                        type: "POST",
                        data: {first_name:first_name,last_name:last_name,
                                email:email,email:email,dob:dob,
                                profile_image:profile_image,case_details:case_details },
                            success:function(data){
                                    $('#msgs').html('Booking successful.\n You would be contacted within the next 24 hours!');

                            }
                        });

                 });
        });
        </script>


    @toastr_js
