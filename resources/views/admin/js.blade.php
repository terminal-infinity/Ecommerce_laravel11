<!-- JavaScript files-->
<script type="text/javascript">
      function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
          title:"Are You Delete This?",
          text:"This Delete will be Permanent",
          icon:"warning",
          buttons:true,
          dangerMode:true,
        })
        .then((willCancel) =>{
          if(willCancel){
            window.location.href=urlToRedirect;
          }
        })
      }
</script>

<script src="{{ asset('admincss/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admincss/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admincss/js/adminlte.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admincss/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admincss/plugins/dropzone/dropzone.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admincss/js/demo.js') }}"></script>
<script>
  Dropzone.autoDiscover = false;    
  $(function () {
      // Summernote
      $('.summernote').summernote({
          height: '300px'
      });
     
      const dropzone = $("#image").dropzone({ 
          url:  "create-product.html",
          maxFiles: 5,
          addRemoveLinks: true,
          acceptedFiles: "image/jpeg,image/png,image/gif",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }, success: function(file, response){
              $("#image_id").val(response.id);
          }
      });

  });
</script>

   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script> --}}